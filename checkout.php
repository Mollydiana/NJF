<?php
require_once(dirname(__FILE__).'/config/config.inc.php');
include_once(LIB_DIR.'/flowers.inc.php');
include_once(LIB_DIR.'/sel.inc.php');

//d($_REQUEST);

//create cart
if(!isset($_SESSION['cart'])) $_SESSION['cart']=array('items'=>array());


switch(request('action')){
	case 'submit_main':
	    if(!request('product')) redirect('/index.php');
    	    if(!preg_match('/^(\d+)([sml])$/',request('product'),$m)) d('error product request');
    	    $item=array('p'=>$m[1],'s'=>$m[2],'q'=>1);
    	    $_SESSION['cart']['items'][]=$item;
	    redirect('checkout.php?action=checkout1');
		break;

	case 'submit_checkout2':
	    $r=$_POST;
	    unset($r['action']);unset($r['step']);
	    $_SESSION['checkout2']=$r;
	    //$data=$_POST;
	    redirect('checkout.php?action=checkout'.request('step'));
		break;


	case 'remove':
		unset($_SESSION['cart']['items'][request('id')]);
	    redirect('checkout.php?action=checkout1');
		break;

	case 'update_qty':
		foreach($_POST['q'] as $k=>$v){
			$_SESSION['cart']['items'][$k]['q']=$v;
		}
	    redirect('checkout.php?action=checkout1');
		break;



	case 'checkout1':
	    global $flowers;
	    $cart=&$_SESSION['cart'];
	    $sizes=array('s'=>'Small','m'=>'Medium','l'=>'Large');
	    $i=1;
	    $cart['subtotal']=0;
	    foreach($cart['items'] as $k=>$v){
	        $item=&$cart['items'][$k];
	    	$item['id']=$k;
	    	$item['num']=$i++;
	        $flower=$flowers[$item['p']];
	    	$item['price']=$flower['p'.$item['s']];
	    	$item['totalprice']=$item['price']*$item['q'];
	    	$item['im']=$flower['im'];
	    	$item['description']=$flower['description'];
	    	$item['size']=$sizes[$item['s']];
			$cart['subtotal']+=$item['totalprice'];
	    }
	    $cart=getCartDetails($cart);	    

	    $cart['delivery_cost']=DELIVERY_COST;
	    $cart['sales_tax_perc']=SALES_TAX;
	    $cart['sales_tax']=($cart['subtotal']+$cart['delivery_cost']) * SALES_TAX / 100.0;
	    $cart['order_total']=$cart['subtotal']+$cart['delivery_cost'] +  $cart['sales_tax'];
	    $data['cart']=$_SESSION['cart'];
		//d($data);
	    echo createPage(TEMPLATE_DIR.'/checkout_01.htm', $data);
		break;

	case 'checkout2':
		//load data
		$data=array();
		if(isset($_SESSION['checkout2'])){
			$data=$_SESSION['checkout2'];
		}
	    $data['cart']=$_SESSION['cart'];

//	    $data['cart']=$_SESSION['cart'];
    	$data['selState']=getSelState();
    	$data['selMonth']=getSelMonth();
    	$data['selMonthShort']=getSelMonthShort();
    	$data['selYear']=getSelYear();
    	$data['selDay']=getSelDay();
    	$data['selAMPM']=getSelAMPM();
    	$data['selCcType']=getSelCcType();
    	if(!isset($data['d_date_year'])) 	$data['d_date_year']=date('y');
    	if(!isset($data['d_date_month'])) 	$data['d_date_month']=date('m');
    	if(!isset($data['d_date_day'])) 	$data['d_date_day']=date('d');
    	if(!isset($data['d_state'])) $data['d_state']='CA';
    	if(!isset($data['b_state'])) $data['b_state']='CA';
		echo createPage(TEMPLATE_DIR.'/checkout_02.htm', $data);
		break;

	case 'checkout3':
		//load data
		$data=$_SESSION['checkout2'];
	    $data['cart']=$_SESSION['cart'];
	    $data['d_time_title']=getSelTitle($data['d_time'],getSelAMPM());
	    $data['cc_num_last4']=substr($data['cc_num'],-4,4);
	    echo createPage(TEMPLATE_DIR.'/checkout_03.htm', $data);
		break;

	case 'submit_order':
		include_once(LIB_DIR.'/notification.inc.php');
		$data=$_SESSION['checkout2'];
	    $data['cart']=$_SESSION['cart'];
		//place order and view checkout 4 confirmation
		db_query("insert into orders(submit_time) values(now())");
		$order_id=db_insert_id();
		$r=$_SESSION['checkout2'];
		$cart=$_SESSION['cart'];
		$cart_items=array();
		foreach($cart['items'] as $v) 
			$cart_items[]=array('p'=>$v['p'],'s'=>$v['s'],'q'=>$v['q'],'price'=>$v['price'],);
		$r['d_date']=dateFromParts($r['d_date_year'],$r['d_date_month'],$r['d_date_day']);
		db_query("
		update orders set
			d_date=".q($r['d_date']).",
			d_time=".q($r['d_time']).",
			d_firstname=".q($r['d_firstname']).",
			d_lastname=".q($r['d_lastname']).",
			d_company=".q($r['d_company']).",
			d_phone=".q($r['d_phone']).",
			d_address1=".q($r['d_address1']).",
			d_address2=".q($r['d_address2']).",
			d_city=".q($r['d_city']).",
			d_state=".q($r['d_state']).",
			d_zip=".q($r['d_zip']).",
			d_message=".q($r['d_message']).",
			b_firstname=".q($r['b_firstname']).",
			b_lastname=".q($r['b_lastname']).",
			b_company=".q($r['b_company']).",
			b_address1=".q($r['b_address1']).",
			b_address2=".q($r['b_address2']).",
			b_email=".q($r['b_email']).",
			b_phone=".q($r['b_phone']).",
			b_city=".q($r['b_city']).",
			b_state=".q($r['b_state']).",
			b_zip=".q($r['b_zip']).",
			cc_type=".q($r['cc_type']).",
			cc_num=".q($r['cc_num']).",
			cc_exp_m=".q($r['cc_exp_m']).",
			cc_exp_y=".q($r['cc_exp_y']).",
			cc_cvv=".q($r['cc_cvv']).",

			amount=".q($cart['subtotal']).",
			sales_tax_perc=".q($cart['sales_tax_perc']).",
			sales_tax=".q($cart['sales_tax']).",
			delivery_cost=".q($cart['delivery_cost']).",
			order_total=".q($cart['order_total']).",
			cart_numitems=".q(count($cart_items)).",
			cart_items_array=".q(serialize($cart_items)).",
			
			status='open'
			where id=".q($order_id)."
	");
		$data['order_id']=$order_id;
	    $data['d_time_title']=getSelTitle($data['d_time'],getSelAMPM());
	    $data['cc_num_last4']=substr($data['cc_num'],-4,4);
	    
//$GLOBALS['DEBUG_EMAIL1']=1;
        sendNotification('office_order',$data,OFFICE_EMAIL);
        sendNotification('store_order',$data,$data['b_email']);
//d(111);
        // clear shopping cart and prepare data for step4
		$_SESSION['checkout4']=$_SESSION['checkout2'];
		$_SESSION['cart4']=$_SESSION['cart'];
        $_SESSION['cart4']['order_id']=$order_id;
		unset($_SESSION['checkout2']);
		unset($_SESSION['cart']);

	    redirect('checkout.php?action=checkout4');

	case 'checkout4':
		//load data
		$data=$_SESSION['checkout4'];
	    $data['cart']=$_SESSION['cart4'];
		$data['cart']=getCartDetails($data['cart']);	    
		
		$pnums=array();
		foreach($data['cart']['items'] as $v) 
		    $pnums[]='#'.$v['pnum'];
		$data['pnums_str']=join(',',$pnums);
	    $data['d_time_title']=getSelTitle($data['d_time'],getSelAMPM());
	    $data['cc_num_last4']=substr($data['cc_num'],-4,4);
//	    d($data);
		echo createPage(TEMPLATE_DIR.'/checkout_04.htm', $data);
		break;

	case 'receipt':
		$data=$_SESSION['checkout4'];
	    $data['cart']=$_SESSION['cart4'];
	    $data['d_time_title']=getSelTitle($data['d_time'],getSelAMPM());
	    $data['cc_num_last4']=substr($data['cc_num'],-4,4);
		$data['cart']=getCartDetails($data['cart']);	    
		echo createPage(TEMPLATE_DIR.'/receipt.htm', $data);
		break;


}


?>
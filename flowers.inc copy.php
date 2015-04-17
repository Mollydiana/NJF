<?php

$GLOBALS['flowers']=getFlowers();	
                                           
                                             
function &getFlowers(){
	static $flowers;
	if(!isset($flowers)){
		$flowers=array(
    '1'=>array('im'=>'store-a1.jpg','imb'=>'store-a1-lg.jpg','ps'=>75,'pm'=>100,'pl'=>150,'title'=>'Coco Chanel','description'=>' Fashion fades, only style remains the same - Coco Chanel. A simply elegant bouquet of pristine all white blooms complimented with a chic black vase.'),
    '2'=>array('im'=>'store-a2.jpg','imb'=>'store-a2-lg.jpg','ps'=>125,'pm'=>175 ,'pl'=>225,'title'=>'The Royal Jewels','description'=>'Fit for any Queen. Inspired by rich gem tones and market&#8217;s most exquisite finds, this arrangement showcases Phalaenopsis, Lady slipper and Vanda orchids, accompanied with bold merlot calla lilies.'),
    '3'=>array('im'=>'store-a3.jpg','imb'=>'store-a3-lg.jpg','ps'=>75,'pm'=>100 ,'pl'=>125,'title'=>'Spring Morning','description'=>'Wake-up to Spring with all this seasons local faves! Hyacinth, tulips, lilacs, sweet-pea, daffodils, this list goes on...'),
    '4'=>array('im'=>'store-b1.jpg','imb'=>'store-b1-lg.jpg','ps'=>75,'pm'=>100 ,'pl'=>125,'title'=>'Honey Bunny','description'=>'Fresh spring mix of the SF Flower Marts growers. Celebrate fresh, local seasonal blooms include lilacs garden roses, tulips, daffodils, perfect for all Spring holidays!'),
    '5'=>array('im'=>'store-b2.jpg','imb'=>'store-b2-lg.jpg','ps'=>85,'pm'=>100 ,'pl'=>125,'title'=>'Brandy Snaps','description'=>'Vintage blooms are brought forward to the 21st century with a subtle modern twist. A sophisticated arrangement pairing Cherry Brandy roses, hypercum berry, chartreuse hydrangea embellished with variegated foliage.'),
    '6'=>array('im'=>'store-b3.jpg','imb'=>'store-b3-lg.jpg','ps'=>75,'pm'=>100 ,'pl'=>125,'title'=>'Earthy Brights','description'=>'Simple and strong colors and textures perfectly packed together here. Kales, lilies, geraniums, callas, stocks.'),
    '7'=>array('im'=>'store-c1.jpg','imb'=>'store-c1-lg.jpg','ps'=>75,'pm'=>100 ,'pl'=>145,'title'=>'Bold & Beautiful','description'=>'Color and texture are fused in this striking combination of vibrant hydrangea, Cymbidium orchids, decorative kale and lush green Brunia & Brazilia, finished in a leaf wrapped glass vase.'),
    '8'=>array('im'=>'store-c2.jpg','imb'=>'store-c2-lg.jpg','ps'=>75,'pm'=>100 ,'pl'=>125,'title'=>'Textured Romance','description'=>'Local seasonal  protea, cymbidium orchids create an exotic mix, accented with other farm fresh local treats.'),
    '9'=>array('im'=>'store-c3.jpg','imb'=>'store-c3-lg.jpg','ps'=>75,'pm'=>100 ,'pl'=>125,'title'=>'Dream Team','description'=>'Tulips, hyacinth and blue thistle come together making the perfect team.'),
   '10'=>array('im'=>'store-d1.jpg','imb'=>'store-d1-lg.jpg','ps'=>75,'pm'=>100 ,'pl'=>125,'title'=>'Butterscotch','description'=>'Soothing yellows & creams calm the soul with perfect blend of roses, callas, kales, fiddlehead ferns & craspedia.'),
   '11'=>array('im'=>'store-d2.jpg','imb'=>'store-d2-lg.jpg','ps'=>75,'pm'=>100 ,'pl'=>125,'title'=>'Spring Thing','description'=>'Lush fresh mix of local spring blooms, hyacinth, tulips, stock have fun with others.'),
   '12'=>array('im'=>'store-d3.jpg','imb'=>'store-d3-lg.jpg','ps'=>125,'pm'=>175 ,'pl'=>225,'title'=>'Green Goddess','description'=>'Go green, revitalize and rejuvenate with super fresh tasty all green arrangement.'),
   '13'=>array('im'=>'store-e1.jpg','imb'=>'store-e1-lg.jpg','ps'=>80,'pm'=>120 ,'pl'=>150,'title'=>'Tulip Trio','description'=>'Modern design here color blocking with tulips. Look inside the vase for a hidden treasure of succulents.'),
   '14'=>array('im'=>'store-e2.jpg','imb'=>'store-e2-lg.jpg','ps'=>75,'pm'=>100 ,'pl'=>125,'title'=>'Minty Tulips','description'=>' Bold Red Tulips kissed with fresh organic mint.'),
   '15'=>array('im'=>'store-e3.jpg','imb'=>'store-e3-lg.jpg','pl'=>250,'title'=>'Nine Lives','description'=>'You can never have too many succulents and air-plants friends.'),
   '16'=>array('im'=>'store-f1.jpg','imb'=>'store-f1-lg.jpg','ps'=>100,'pm'=>145 ,'pl'=>175,'title'=>'Flash Dance','description'=>'Electric mix of spring & summer blooms are turned-up a notch here with glorisosa lily, sweet-pea, lilac, hyacinth, parrot tulips plus seasons best!'),
   '17'=>array('im'=>'store-f2.jpg','imb'=>'store-f2-lg.jpg','ps'=>85,'pm'=>125 ,'pl'=>150,'title'=>'Earth Tones','description'=>'Grounded and refined, this tailored rustic design is a fusion of a harmonious, rich and natural palette. Includes dianthus, thistle, protea, kale, scabiosa, and orchids.'),
   '18'=>array('im'=>'store-f3.jpg','imb'=>'store-f3-lg.jpg','ps'=>85,'pm'=>125 ,'pl'=>150,'title'=>'Bucks Fizz','description'=>'Speed it up, then slow it down and admire this sophisticated arrangement.'),
   '19'=>array('im'=>'store-g1.jpg','imb'=>'store-g1-lg.jpg','ps'=>65,'pm'=>85 ,'pl'=>125,'title'=>'Sun Drenched','description'=>'Sunny days are here to stay with this saturated salute to this classic bloom. Playful monkey tails are interspersed with the sunny shades of sunflowers creating fun in the sun any time of year.'),
   '20'=>array('im'=>'store-g2.jpg','imb'=>'store-g2-lg.jpg','ps'=>65,'pm'=>85 ,'pl'=>125,'title'=>'Newman&#8217;s Own','description'=>'Farm fresh and organic with sweet chamomile, mint, yarrow, roses, dusty miller, scabiosa,and dianthus, interspersed with billy balls adds that playful touch.'),
   '21'=>array('im'=>'store-g3.jpg','imb'=>'store-g3-lg.jpg','ps'=>85,'pm'=>120 ,'pl'=>150,'title'=>'The King','description'=>'King protea stand proud amongst a strong army of succulents and ferns.'),
   '22'=>array('im'=>'store-h1.jpg','imb'=>'store-h1-lg.jpg','ps'=>85,'pm'=>125 ,'pl'=>150,'title'=>'Enchanted Garden','description'=>'Get swept away into the soft tones of violet and richer tones of amethyst. Perfectly suitable for all occasions, passions and people. Picasso calla lilies, cool water roses, hydrangea, stock and garden foliage complete this dreamy look.'),
   '23'=>array('im'=>'store-h2.jpg','imb'=>'store-h2-lg.jpg','ps'=>65,'pm'=>85 ,'pl'=>125,'title'=>'Wild Flower Chic','description'=>'The name sums it up. Fresh herbs garnish this organic form to create a visual treat that looks like it was just picked out of nature. Deliver in a rustic wooden box.'),
   '24'=>array('im'=>'store-h3.jpg','imb'=>'store-h3-lg.jpg','ps'=>85,'pm'=>125 ,'pl'=>150,'title'=>'Pretty in Pink','description'=>'Full, lush and romantic this combination of playful blooms gives a whimsical touch with a sophisticated palette creating a certain je ne sais quio.'),
   '25'=>array('im'=>'store-i1.jpg','imb'=>'store-i1-lg.jpg','ps'=>100,'pm'=>150 ,'pl'=>200,'title'=>'Pure Opulence','description'=>'Phalaenopsis orchids cascade effortlessly here. Chic and luxurious, this monochromatic combination is anything but ordinary.'),
   '26'=>array('im'=>'store-i2.jpg','imb'=>'store-i2-lg.jpg','ps'=>75,'pm'=>100 ,'pl'=>150,'title'=>'Fresh Fusion','description'=>'Softer ivory and white flowers combine with lush and contrasting greens seamlessly to create this unique arrangement. The perfect marriage of simplicity and texture. Calla lilies, orchids, dianthus,poppy pods and chestnut arrive in a sleek white container.'),
   '27'=>array('im'=>'store-i3.jpg','imb'=>'store-i3-lg.jpg','ps'=>200,'pm'=>250 ,'pl'=>300,'title'=>'The Elizabeth Taylor','description'=>'Striking and show stopping, it is all it needs to be. Rare and precious blooms make one of a kind dramatic arrangement. Vibrant ultra purple Vanda orchids exclusively fashion this treasure. Accompanied with the season best burgundy bloom.'),
   '28'=>array('im'=>'store-j1.jpg','imb'=>'store-j1-lg.jpg','ps'=>85,'pm'=>125 ,'pl'=>175,'title'=>'The Wild One','description'=>'Take a walk on the wild side! Rich tones and texture this African safari inspired arrangement of amaranthus, king protea, banskia, succulents and other seasonal blooms served in a wooden trunk container.'),
   '29'=>array('im'=>'store-j2.jpg','imb'=>'store-j2-lg.jpg','ps'=>85,'pm'=>120 ,'pl'=>150,'title'=>'Club Tropicana','description'=>'Take yourself back to that moment on the beach with this flourish of vibrant tropical blooms. This fresh take on an island favorite includes ginger,heliconia, antherium and dramatic tropical foliage.'),
   '30'=>array('im'=>'store-j3.jpg','imb'=>'store-j3-lg.jpg','ps'=>85,'pm'=>120 ,'pl'=>150,'title'=>'Stellar','description'=>'Bold magenta, fresh chartreuse, rich chocolates and silvers combined to create a dreamy starlit design incorporating queen protea, chocolate succulents, chrysanthemums and brunia finished with matching container.'),
   '31'=>array('im'=>'store-k1.jpg','imb'=>'store-k1-lg.jpg','ps'=>75,'pm'=>100,'pl'=>125,'title'=>'Urban Chic','description'=>'Rich in colors & texture, this perfect combination of rustic kales, stock blend with sophisticated proteas, calla & sumatra lilies.'),
   '32'=>array('im'=>'store-k2.jpg','imb'=>'store-k2-lg.jpg','ps'=>125,'pm'=>150,'pl'=>175,'title'=>'Jungle Book','description'=>'Interesting air-plants, succulents, orchid and protea all play well together in this fun living arrangement.'),
   '33'=>array('im'=>'store-k3.jpg','imb'=>'store-k3-lg.jpg','pl'=>75,'title'=>'Succulent Trio','description'=>'The perfect gift for home or office. Three premium succulents live sting in our mini trunk vases.'),
   '34'=>array('im'=>'store-l1.jpg','imb'=>'store-l1-lg.jpg','ps'=>65,'pm'=>85 ,'pl'=>125,'title'=>'Orchid','description'=>'The simple, luxurious elegance of orchids, perfect for any occasion. Dressed-up with branches, moss, pods and river stones. Multiple orchid plants nestled in decorative pots.'),
   '35'=>array('im'=>'store-l2.jpg','imb'=>'store-l2-lg.jpg','ps'=>75,'pm'=>100 ,'pl'=>150,'title'=>'Succulent and Orchid','description'=>'Ever exquisite orchids are paired together with sleek fashionable succulents. Finished with moss, branches and river stones .his sophisticated design is perfect for any occasion.'),
   '36'=>array('im'=>'store-l3.jpg','imb'=>'store-l3-lg.jpg','ps'=>65,'pm'=>85 ,'pl'=>100,'title'=>'Succulent Splendor','description'=>'Succulents are the smartest of gifts, they require very little work. Unique contemporary designs bringing happiness, luck and wealth. This is the perfect gift for any occasion.'),
   '37'=>array('im'=>'PourHomme.jpg','imb'=>'PourHomme-lg.jpg','pl'=>135,'title'=>'Pour Homme','description'=>'If not just flowers, what else? <br> The exclusive French perfume from <a href="http://lescontes.fr/?id_lang=1">Les Contes</a> <br><br> Pour Homme - For the heroic yet romantic prince with a bewitching smile.<br><br>&#42;&#42;&#42;NJF is the exclusive retailer for the U.S.'),
   '38'=>array('im'=>'tesey.jpg','imb'=>'tesey-lg.jpg','pl'=>135,'title'=>'Tesey','description'=>'If not just flowers, what else? <br> The exclusive French perfume from <a href="http://lescontes.fr/?id_lang=1">Les Contes</a> <br><br> Tesey - For those men who confidently never give up and overcome all difficulties.<br><br>&#42;&#42;&#42;NJF is the exclusive retailer for the U.S.'),
   '39'=>array('im'=>'magus.jpg','imb'=>'magus-lg.jpg','pl'=>135,'title'=>'Magus','description'=>'If not just flowers, what else? <br> The exclusive French perfume from <a href="http://lescontes.fr/?id_lang=1">Les Contes</a> <br><br> Magus - The perfect gift for a confident man or woman, outwardly restrained, but inwardly passionate.<br><br>&#42;&#42;&#42;NJF is the exclusive retailer for the U.S.'),
);
}

	$i=1;
	foreach($flowers as $k=>&$v){
		$v['id']=$k;
		$v['num']=$i++;
	}
	return $flowers;	
}                                             


function getCartDetails($cart){
    $flowers=getFlowers();
	foreach($cart['items'] as &$v){
		$flower=$flowers[$v['p']];
		$v['title']=$flower['title'];
		$v['im']=$flower['im'];
		$v['imb']=$flower['imb'];
		$v['description']=$flower['description'];
		$v['pnum']=$flower['num'];
	}
	return $cart;
}
                                             
?>
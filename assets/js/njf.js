// Navbar turns white on scroll


var mainbottom = $('#home').offset().top + $('#home').height();

// on scroll,
$(window).on('scroll',function(){

    // we round here to reduce a little workload
    stop = Math.round($(window).scrollTop());
    if ($(window).width() > 768) {
        if (stop > mainbottom) {
            $('#nav').addClass('past-main');
            $('.navbar-nav > li > a').css("color", "#262626");
        } else {
            $('#nav').removeClass('past-main');
            $('.navbar-nav > li > a').css("color", "#fff");
        }
    }
});
// this if for the readmore about section at bottom of index.html
var $el, $ps, $up, totalHeight;

$(".sidebar-box .button").click(function() {

  totalHeight = 0

  $el = $(this);
  $p  = $el.parent();
  $up = $p.parent();
  $ps = $up.find("p:not('.read-more')");

  // measure how tall inside should be by adding together heights of all inside paragraphs (except read-more paragraph)
  $ps.each(function() {
    totalHeight += $(this).outerHeight();
  });

  $up
    .css({
      // Set height to prevent instant jumpdown when max height is removed
      "height": $up.height(),
      "max-height": 9999
    })
    .animate({
      "height": totalHeight
    });

  // fade out read-more
  $p.fadeOut();

  // prevent jump-down
  return false;

});

//display phone number on mobile
$(window).resize(function () {
    if ($(window).width() < 640) {
        $(".phone-number").css('display', 'inline-block');
    }
    else {
        $(".phone-number").css('display', 'none');
    }
});

$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
// MODAL //

//$('.main-image').attr("<a class='product-largeimg-link' href='#'><img src='images/product/store-a3.jpg' class='img-responsive product-largeimg' alt='img'></a>");
//$("#1").attr("src", "images/product/store-a3.jpg");

//$('.quickview').on('click', function(e) {
//    var src = $(this).attr('data-src');
//
//    $(".main-image").attr({'src':src});
//});
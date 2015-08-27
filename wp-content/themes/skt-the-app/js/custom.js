// nivo slider 
jQuery(document).ready(function() {
        if( jQuery( '#slider' ).length > 0 ){
        jQuery('.nivoSlider').nivoSlider({
                        effect:'fade',
    });
        }
});

// navigation script for responsive
var ww = jQuery(window).width();
jQuery(document).ready(function() { 
	jQuery("nav#nav li a").each(function() {
		if (jQuery(this).next().length > 0) {
			jQuery(this).addClass("parent");
		};
	})
	jQuery(".mobile_nav a").click(function(e) { 
		e.preventDefault();
		jQuery(this).toggleClass("active");
		jQuery("nav#nav").slideToggle('fast');
	});
	adjustMenu();
})
// navigation orientation resize callbak
jQuery(window).bind('resize orientationchange', function() {
	ww = jQuery(window).width();
	adjustMenu();
});
// navigation function for responsive
var adjustMenu = function() {
	if (ww < 999) {
		jQuery(".mobile_nav a").css("display", "block");
		if (!jQuery(".mobile_nav a").hasClass("active")) {
			jQuery("nav#nav").hide();
		} else {
			jQuery("nav#nav").show();
		}
		jQuery("nav#nav li").unbind('mouseenter mouseleave');
	} else {
		jQuery(".mobile_nav a").css("display", "none");
		jQuery("nav#nav").show();
		jQuery("nav#nav li").removeClass("hover");
		jQuery("nav#nav li a").unbind('click');
		jQuery("nav#nav li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
			jQuery(this).toggleClass('hover');
		});
	}
}

  var jscrl = jQuery.noConflict();
  jscrl(document).ready(function() {
  function filterPath(string) {
    return string
      .replace(/^\//,'')  
      .replace(/(index|default).[a-zA-Z]{3,4}$/,'')  
      .replace(/\/$/,'');
  }
  jscrl('a[href*=#]').each(function() {
    if ( filterPath(location.pathname) == filterPath(this.pathname)
    && location.hostname == this.hostname
    && this.hash.replace(/#/,'') ) {
      var $targetId = jscrl(this.hash), $targetAnchor = jscrl('[name=' + this.hash.slice(1) +']');
      var $target = $targetId.length ? $targetId : $targetAnchor.length ? $targetAnchor : false;
       if ($target) {
         var targetOffset = $target.offset().top;
         jscrl(this).click(function() {
   var tgt = targetOffset - 0;
            jscrl('html, body').animate({scrollTop: tgt}, 1500);
         });
      }
    }
  });
});

jQuery(function () {
    var scroll_timer;
    var displayed = false;
    var $message = jQuery('#jump a');
    var $window = jQuery(window);
    var top = jQuery(document.body).children(0).position().top;
    $window.scroll(function () {
        window.clearTimeout(scroll_timer);
        scroll_timer = window.setTimeout(function () {
            if($window.scrollTop() <= top)
            {
                displayed = false;
                $message.fadeOut(500);
            }
            else if(displayed == false)
            {
                displayed = true;
                $message.stop(true, true).show().click(function () { $message.fadeOut(500); });
            }
        }, 100);
    });
});

jQuery(window).scroll(function() {
		jQuery('.feature_section').each(function(){
		var imagePos = jQuery(this).offset().top;

		var topOfWindow = jQuery(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				jQuery(this).addClass("fadeInUp");
			}
		});
		
		jQuery('.about_text').each(function(){
		var imagePos = jQuery(this).offset().top;

		var topOfWindow = jQuery(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				jQuery(this).addClass("bounceIn");
			}
		});
		
		jQuery('.flex_content').each(function(){
		var imagePos = jQuery(this).offset().top;

		var topOfWindow = jQuery(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				jQuery(this).addClass("fadeInLeftBig");
			}
		});
		
		jQuery('.super-flex').each(function(){
		var imagePos = jQuery(this).offset().top;

		var topOfWindow = jQuery(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				jQuery(this).addClass("fadeInRightBig");
			}
		});
		
		jQuery('.responsive-design').each(function(){
		var imagePos = jQuery(this).offset().top;

		var topOfWindow = jQuery(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				jQuery(this).addClass("zoomIn");
			}
		});
		
		jQuery('.home_portfolio').each(function(){
		var imagePos = jQuery(this).offset().top;

		var topOfWindow = jQuery(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				jQuery(this).addClass("fadeInLeftBig");
			}
		});
		
		jQuery('.get-theapp').each(function(){
		var imagePos = jQuery(this).offset().top;

		var topOfWindow = jQuery(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				jQuery(this).addClass("zoomInLeft");
			}
		});
		
		jQuery('.contact_info').each(function(){
		var imagePos = jQuery(this).offset().top;

		var topOfWindow = jQuery(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				jQuery(this).addClass("fadeInLeftBig");
			}
		});
		
		jQuery('.quick_info').each(function(){
		var imagePos = jQuery(this).offset().top;

		var topOfWindow = jQuery(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				jQuery(this).addClass("fadeInRightBig");
			}
		});	
	});
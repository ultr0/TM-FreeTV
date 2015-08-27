jQuery(document).ready(function() {
    jQuery('.toggle-faq h3').each(function() {
        var tis = jQuery(this), state = false, answer = tis.next('p').slideUp();
        tis.click(function() {
            state = !state;
            answer.slideToggle(state);
            tis.parent(".toggle-faq").toggleClass('active',state);
        });
    });

    jQuery(".events-slider").owlCarousel({
        items : 4,
        navigation : true,
        slideSpeed : 300,
        paginationSpeed : 400,
        itemsCustom : false,
        itemsDesktop : [1120,4],
        itemsTablet: [1024,3],
        itemsTabletSmall: [768,1],
        itemsMobile : [479,1]
    });

    jQuery(".events-slider .owl-buttons .owl-prev").addClass("icon-angle-left").text("");
    jQuery(".events-slider .owl-buttons .owl-next").addClass("icon-angle-right").text("");

    jQuery(".mobile-click").click(function(){
        jQuery(this).next("ul").toggle();
    });
	
	var slideshow_speed = jQuery("#slideshow_speed").val();
	var animation_speed = jQuery("#animation_speed").val();
	var autoscroll = jQuery("#autoscroll").val();
	if(autoscroll=='yes') { 
		var autoplay = slideshow_speed;
	}
	else {
		var autoplay = false;
	}	
	
    jQuery(".top-slider").owlCarousel({
        navigation : false,
        slideSpeed : animation_speed,
        paginationSpeed : 400,
        singleItem:true,
        autoPlay:autoplay,
        animateOut: 'fade',
        animateIn: 'flipInX'
    });

    jQuery(".menu-top-container ul li ul").prepend('<div class="submenu-triangle" /></div>');
});

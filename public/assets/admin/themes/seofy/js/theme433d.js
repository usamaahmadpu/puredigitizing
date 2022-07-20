"use strict";

is_visible_init ();
seofy_slick_navigation_init();

jQuery(document).ready(function($) {
	seofy_sticky_init();
	seofy_search_init();
	seofy_mobile_header();
	seofy_woocommerce_qty();
	seofy_init_timeline_appear();
	seofy_init_timeline_horizontal_appear();
	seofy_init_progress_appear();
	seofy_carousel_slick();
	seofy_counter_init();
	seofy_countdown_init ();
	seofy_circuit_services();
	seofy_circuit_services_resize();
	seofy_img_layers();
	seofy_page_title_parallax ();
	seofy_extended_parallax ();
	seofy_message_anim_init();
	seofy_scroll_up();
	seofy_link_scroll();
	seofy_skrollr_init();
	seofy_sticky_sidebar ();
	seofy_videobox_init ();
	seofy_parallax_video();
	wgl_timeTabs();
	seofy_select_wrap();
	jQuery( '.wgl_module_title .carousel_arrows' ).seofy_slick_navigation();
});

jQuery(window).load(function() {
	seofy_isotope ();
	seofy_blog_masonry_init ();
	seofy_instagram_init();
	setTimeout(function(){
		jQuery('#preloader-wrapper').fadeOut();
	},1100);
	particles_custom ();
	seofy_menu_lavalamp();

	jQuery(".wgl-currency-stripe_scrolling").each(function(){
    	jQuery(this).simplemarquee({
	        speed: 40,
	        space: 0,
	        handleHover: true,
	        handleResize: true
	    });
    })
});

jQuery(window).resize(function(){
	seofy_circuit_services_resize();
})
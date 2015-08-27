<?php
/**
 * Lindeza functions and definitions
 *
 * @package Lindeza
 */
 
 /*
 * Loads the Options Panel
 *
 */

/*----------------------------*/
/*	Adding customizer with kirki 
/*----------------------------*/ 
include_once( trailingslashit(get_template_directory()) . '/lib/customizer.php' );
include_once( trailingslashit(get_template_directory()) . '/lib/kirki/kirki.php' );

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @see http://developer.wordpress.com/themes/content-width/Enqueue
 */
 
if ( ! isset( $content_width ) ) {
	$content_width = 1135; /* pixels */
}

/**
 * Theme support and thumbnail sizes
*/
 
if( ! function_exists( 'lindeza_theme_setup' ) ) {

	function lindeza_theme_setup() {
	
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on BuildPress, use a find and replace
		 */
		 
		load_theme_textdomain( 'lindeza', get_template_directory() . '/lang' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		
		// Add default title support
		add_theme_support( 'title-tag' ); 

		// Custom Backgrounds
		add_theme_support( 'custom-background', array(
			'default-color' => 'ffffff',
		) );

		/**
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 */
		 
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 150, 150, true );
		add_image_size( 'lindeza-news-box', 360, 230, true );
		add_image_size( 'lindeza-portfolio-box', 285, 240, true );

		// Menus
		add_theme_support( 'menus' );
		register_nav_menu( 'main-menu', _x( 'Main Menu', 'backend', 'lindeza' ) );
        register_nav_menu( 'top-menu', _x( 'Top Menu', 'backend', 'lindeza' ) );

		// Add theme support for Semantic Markup
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption'
		) );

		// add excerpt support for pages
		add_post_type_support( 'page', 'excerpt' );

		// Add CSS for the TinyMCE editor
		add_editor_style();
	}
	add_action( 'after_setup_theme', 'lindeza_theme_setup' );
}


/**
 * Enqueue CSS stylesheets
 */
 
if( ! function_exists( 'lindeza_enqueue_styles' ) ) {
	function lindeza_enqueue_styles() {
	
	    // main style
	
	    wp_enqueue_style( 'amaryllo-style', get_stylesheet_uri() );	

		// fontello
		wp_enqueue_style( 'lindeza-fontello', get_template_directory_uri() . '/assets/css/fonts/fontello/css/fontello.css', array(), '1.0' );

		// animation
		wp_enqueue_style( 'lindeza-animation', get_template_directory_uri() . '/assets/css/fonts/fontello/css/animation.css', array(), '1.0' );

		// fontello-ie7
		wp_enqueue_style( 'lindeza-fontello-ie7', get_template_directory_uri() . '/assets/css/fonts/fontello/css/fontello-ie7.css', array(), '1.0' );		
	
		// owl theme
		wp_enqueue_style( 'lindeza-owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.css', array(), '1.0' );
		
		// owl carousel
		wp_enqueue_style( 'lindeza-owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), '1.0' );
		
		// responsive
		wp_enqueue_style( 'lindeza-responsive-main', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0' ); 

	}
	add_action( 'wp_enqueue_scripts', 'lindeza_enqueue_styles' );
}

/**
 * Enqueue JS scripts
 */
 
if( ! function_exists( 'lindeza_enqueue_scripts' ) ) {
	function lindeza_enqueue_scripts() {
		
		// OWL carousel for sliders
		wp_enqueue_script( 'lindeza-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.js', array('jquery'), null );					
		
		// main for script js
		wp_enqueue_script( 'lindeza-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null );			
		
	
		// for nested comments
		if ( is_singular() && comments_open() ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
	add_action( 'wp_enqueue_scripts', 'lindeza_enqueue_scripts' );
}

// load script for  IE9

function lindeza_ie_support_header() {
    echo '<!--[if lt IE 9]>'. "\n";
    echo '<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>'. "\n";
	echo '<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>'. "\n";
    echo '<![endif]-->'. "\n";
}

add_action( 'wp_head', 'lindeza_ie_support_header', 1 );

/**
 * Register sidebars for Lindeza
 *
 * @package Lindeza
 */

function lindeza_sidebars() {

	// Blog Sidebar
	
	register_sidebar(array(
		'name' => __( 'Blog Sidebar', "lindeza"),
		'id' => 'blog-sidebar',
		'description' => __( 'Sidebar on the blog layout.', "lindeza"),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	));	
	
	// Footer Sidebar
	
	register_sidebar(array(
		'name' => __( 'Footer Widget Area', "lindeza"),
		'id' => 'footer-widget-area',
		'description' => __( 'The footer widget area', "lindeza"),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	));	
}

add_action( 'widgets_init', 'lindeza_sidebars' );


// Create Function Paginate

if ( ! function_exists( 'lindeza_paginate_page' ) ) :
	function lindeza_paginate_page() {
	
		wp_link_pages( array( 'before' => '<div class="pagination">', 'after' => '</div><div class="clear"></div>', 'link_before' => '<span class="current_pag">','link_after' => '</span>' ) );
		
	}
endif; 

// Create Function Credits

if ( ! function_exists( 'lindeza_credits' ) ) :
	function lindeza_credits() {
	
		$text = 'Theme created by <a href="'.esc_url('http://www.themestune.com/').'">Themes Tune</a>. Powered by <a href="'.esc_url('http://wordpress.org/').'">WordPress.org</a>';
		
		echo apply_filters( 'lindeza_credits_text', $text) ;
		
	}
endif; 

add_action( 'lindeza_display_credits', 'lindeza_credits' );
?>
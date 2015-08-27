<?php
/**
 * SKT The App functions and definitions
 *
 * @package SKT The App
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */

if ( ! function_exists( 'the_app_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function the_app_setup() {
	if ( ! isset( $content_width ) )
		$content_width = 640; /* pixels */

	load_theme_textdomain( 'the-app', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support('woocommerce');
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_image_size('homepage-thumb',240,145,true);
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', '' ),
	) );
	add_theme_support( 'custom-background', array(
		'default-image' 		=> get_template_directory_uri().'/images/body_bg.jpg',
		'default-repeat'     => 'no-repeat',
	    'default-position-x' => 'center',
	    'default-attachment' => 'fixed',
	) );
	add_editor_style( 'editor-style.css' );
}
endif; // the_app_setup
add_action( 'after_setup_theme', 'the_app_setup' );


function the_app_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'the-app' ),
		'description'   => __( 'Appears on blog page sidebar', 'the-app' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
}
add_action( 'widgets_init', 'the_app_widgets_init' );

define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
require_once get_template_directory() . '/inc/options-framework.php';

// Loads options.php from child or parent theme
$optionsfile = locate_template( 'options.php' );
load_template( $optionsfile );


function the_app_fonts_url() {
    $fonts_url = '';
 
    /* Translators: If there are characters in your language that are not
    * supported by Lora, translate this to 'off'. Do not translate
    * into your own language.
    */
    $open_sans = _x( 'on', 'Open Sans font: on or off', 'the-app' );
 
 
    if ('off' !== $open_sans ) {
        $font_families = array();
 
        if ( 'off' !== $open_sans ) {
            $font_families[] = 'Open Sans:700italic,300,400,800,800italic,600';
        }
 
        $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext' ),
        );
 
        $fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );
    }
 
    return $fonts_url;
}

function the_app_ie_stylesheet(){
	global $wp_styles;
	
	/** Load our IE-only stylesheet for all versions of IE.
	*   <!--[if lt IE 9]> ... <![endif]-->
	*
	*  Note: It is also possible to just check and see if the $is_IE global in WordPress is set to true before
	*  calling the wp_enqueue_style() function. If you are trying to load a stylesheet for all browsers
	*  EXCEPT for IE, then you would HAVE to check the $is_IE global since WordPress doesn't have a way to
	*  properly handle non-IE conditional comments.
	*/
	wp_enqueue_style('skt-theapp-ie', get_template_directory_uri().'/css/ie.css', array('skt-theapp-style'));
	$wp_styles->add_data('skt-theapp-ie','conditional','IE');
	}
add_action('wp_enqueue_scripts','the_app_ie_stylesheet');


function the_app_scripts() {
	wp_enqueue_style( 'the-app-fonts', the_app_fonts_url(), array(), null );
	wp_enqueue_style( 'the_app-basic-style', get_stylesheet_uri() );
	wp_enqueue_style( 'the_app-editor-style', get_template_directory_uri()."/editor-style.css" );
	wp_enqueue_style( 'the_app-nivoslider-style', get_template_directory_uri()."/css/nivo-slider.css" );	
	wp_enqueue_style( 'the_app-base-style', get_template_directory_uri()."/css/style_base.css" );
	wp_enqueue_style( 'the_app-responsive-style', get_template_directory_uri()."/css/responsive.css" );
	wp_enqueue_script( 'the_app-nivo-script', get_template_directory_uri() . '/js/jquery.nivo.slider.js', array('jquery') );
	wp_enqueue_script( 'the_app-custom_js', get_template_directory_uri() . '/js/custom.js');
	wp_enqueue_style( 'the_app-animation-style', get_template_directory_uri().'/css/animation.css' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'the_app_scripts' );


function the_app_pagination() {
	global $wp_query;
	$big = 12345678;
	$page_format = paginate_links( array(
	    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	    'format' => '?paged=%#%',
	    'current' => max( 1, get_query_var('paged') ),
	    'total' => $wp_query->max_num_pages,
	    'type'  => 'array'
	) );
	if( is_array($page_format) ) {
		$paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
		echo '<div class="pagination"><div><ul>';
		echo '<li><span>'. $paged . ' of ' . $wp_query->max_num_pages .'</span></li>';
		foreach ( $page_format as $page ) {
			echo "<li>$page</li>";
		}
		echo '</ul></div></div>';
	}
}

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


function skt_the_app_favicon(){
		if( of_get_option('favicon', true) != '') { ?>
        <link rel="icon" type="image/x-icon" href="<?php echo esc_url( of_get_option('favicon', true) ); ?>" />
<?php 	}
}
add_action('wp_head','skt_the_app_favicon');

// get_the_content format text
function the_app_get_content_format( $str ){
	$raw_content = apply_filters( 'the_content', $str );
	$content = str_replace( ']]>', ']]&gt;', $raw_content );
	return $content;
}

// the_content format text
function the_app_content_format( $str ){
	echo the_app_get_content_format( $str );
}


define('SKT_THEME_URL_DIRECT','http://www.sktthemes.net/themes/theapp_pro/');
define('SKT_URL','http://www.sktthemes.net');
define('SKT_THEME_URL','http://www.sktthemes.net/themes');
define('SKT_THEME_DOC','http://sktthemesdemo.net/documentation/theapp-documentation/');
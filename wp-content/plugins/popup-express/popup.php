<?php


	$popup_express_options = get_option('_popup_express_settings');
	$popup_express_option_start = '_popup_express_general_';
	
	if($popup_express_options[$popup_express_option_start.'is_popup_activated']){
		add_action( 'wp_enqueue_scripts', 'popup_express_scripts_method' );
		add_action('wp_footer', 'pe_the_content_filter');
	}
	
	function pe_isset($theString){
		return isset($theString) && trim($theString) != "";
	}
	
	function pe_popup_time_delay($timeDelay){
		return pe_isset($timeDelay) && is_numeric($timeDelay) ? $timeDelay : 10000;
	}


function popup_express_scripts_method() {
	wp_enqueue_script(
		'popup_express_script',
		plugin_dir_url( __FILE__ ) . 'js/popup.js',
		array( 'jquery' )
	);
	wp_enqueue_script('jquerytools', 'http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js');
	wp_enqueue_style('popup_express_style', plugin_dir_url( __FILE__ ) . 'css/popupTemplate1.css');
	wp_enqueue_style('popup_express_style', 'http://fonts.googleapis.com/css?family=Copse');
	
}




//add_filter( 'the_content', 'my_the_content_filter', 20 );
/**
 * Add a icon to the beginning of every post page.
 *
 * @uses is_single()

function my_the_content_filter( $content ) {

    //if ( is_single() ){
        // Add image to the beginning of each page
        $thedirectory = plugin_dir_path( __FILE__ );
        $popupContent = file_get_contents($thedirectory.'template/popupTemplate1.php');
        //echo $popupContent;
        $content = sprintf($popupContent.'%s',$content);
	//}
    // Returns the content.
    return $content;
}
 */

function pe_the_content_filter( ) {
	
    //if ( is_single() ){
        // Add image to the beginning of each page
        $thedirectory = plugin_dir_path( __FILE__ );
        ob_start();
        //include $thedirectory.'template/templateRequirements.php';
	include $thedirectory.'template/popupTemplate1.php';
	$out1 = ob_get_clean();
	echo $out1;
        //$popupContent = file_get_contents($thedirectory.'template/popupTemplate1.php');
       // echo $popupContent;
        //$content = sprintf($popupContent.'%s',$content);
	//}
    // Returns the content.
    //return $content;
}

?>
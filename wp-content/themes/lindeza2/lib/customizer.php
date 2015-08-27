<?php

function lindeza_customizer_config() {
	
    $url  = get_stylesheet_directory_uri() . '/lib/kirki/';

    /**
     * If you need to include Kirki in your theme,
     * then you may want to consider adding the translations here
     * using your textdomain.
     * 
     * If you're using Kirki as a plugin then you can remove these.
     */

    $strings = array(
        'background-color' => __( 'Background Color', 'lindeza' ),
        'background-image' => __( 'Background Image', 'lindeza' ),
        'no-repeat' => __( 'No Repeat', 'lindeza' ),
        'repeat-all' => __( 'Repeat All', 'lindeza' ),
        'repeat-x' => __( 'Repeat Horizontally', 'lindeza' ),
        'repeat-y' => __( 'Repeat Vertically', 'lindeza' ),
        'inherit' => __( 'Inherit', 'lindeza' ),
        'background-repeat' => __( 'Background Repeat', 'lindeza' ),
        'cover' => __( 'Cover', 'lindeza' ),
        'contain' => __( 'Contain', 'lindeza' ),
        'background-size' => __( 'Background Size', 'lindeza' ),
        'fixed' => __( 'Fixed', 'lindeza' ),
        'scroll' => __( 'Scroll', 'lindeza' ),
        'background-attachment' => __( 'Background Attachment', 'lindeza' ),
        'left-top' => __( 'Left Top', 'lindeza' ),
        'left-center' => __( 'Left Center', 'lindeza' ),
        'left-bottom' => __( 'Left Bottom', 'lindeza' ),
        'right-top' => __( 'Right Top', 'lindeza' ),
        'right-center' => __( 'Right Center', 'lindeza' ),
        'right-bottom' => __( 'Right Bottom', 'lindeza' ),
        'center-top' => __( 'Center Top', 'lindeza' ),
        'center-center' => __( 'Center Center', 'lindeza' ),
        'center-bottom' => __( 'Center Bottom', 'lindeza' ),
        'background-position' => __( 'Background Position', 'lindeza' ),
        'background-opacity' => __( 'Background Opacity', 'lindeza' ),
        'ON' => __( 'ON', 'lindeza' ),
        'OFF' => __( 'OFF', 'lindeza' ),
        'all' => __( 'All', 'lindeza' ),
        'cyrillic' => __( 'Cyrillic', 'lindeza' ),
        'cyrillic-ext' => __( 'Cyrillic Extended', 'lindeza' ),
        'devanagari' => __( 'Devanagari', 'lindeza' ),
        'greek' => __( 'Greek', 'lindeza' ),
        'greek-ext' => __( 'Greek Extended', 'lindeza' ),
        'khmer' => __( 'Khmer', 'lindeza' ),
        'latin' => __( 'Latin', 'lindeza' ),
        'latin-ext' => __( 'Latin Extended', 'lindeza' ),
        'vietnamese' => __( 'Vietnamese', 'lindeza' ),
        'serif' => _x( 'Serif', 'font style', 'lindeza' ),
        'sans-serif' => _x( 'Sans Serif', 'font style', 'lindeza' ),
        'monospace' => _x( 'Monospace', 'font style', 'lindeza' ),
    );	

	$args = array(
  
        // Change the logo image. (URL) Point this to the path of the logo file in your theme directory
        // The developer recommends an image size of about 250 x 250
        
		'logo_image'   => get_template_directory_uri() . '/assets/images/logo.png',
  
        // The color of active menu items, help bullets etc.
        'color_active' => '#95c837',
		
		// Color used on slider controls and image selects
		'color_accent' => '#e7e7e7',
	
        // Color used for secondary elements and desable/inactive controls
        'color_light'  => '#e7e7e7',
  
        // Color used for button-set controls and other elements
        'color_select' => '#34495e',
		 
        // For the parameter here, use the handle of your stylesheet you use in wp_enqueue
        'stylesheet_id' => 'customize-styles', 
		
        // Only use this if you are bundling the plugin with your theme (see above)
        'url_path'     => get_template_directory_uri() . '/lib/kirki/',

        'textdomain'   => 'lindeza',
		
        'i18n'         => $strings,		
	);
	return $args;
}
add_filter( 'kirki/config', 'lindeza_customizer_config' );


/**
 * Create the customizer panels and sections
 */
add_action( 'customize_register', 'lindeza_add_panels_and_sections' ); 
function lindeza_add_panels_and_sections( $wp_customize ) {

	//Add panels

	$wp_customize->add_panel('slider',               array( 'title' => __( 'Slider', 'lindeza' ),                  'description' => __( 'Slides details', 'lindeza' ),          'priority' => 140));
	
    // Add Sections
	
    $wp_customize->add_section('general',   array('title' => __('General Settings', 'lindeza'),            'description' => '',    'priority' => 130,));
    $wp_customize->add_section('homebox',   array('title' => __('Home Box', 'lindeza'),                    'description' => '',    'priority' => 130,));	
	$wp_customize->add_section('promo',     array('title' => __('About Lindeza Theme', 'lindeza'),          'description' => '',    'priority' => 170,));
	
	// slider sections
		
	$wp_customize->add_section('slide1',              array('title' => __('Slide 1', 'lindeza'),                   'description' => '',             'panel' => 'slider',		'priority' => 140,));
	$wp_customize->add_section('slide2',              array('title' => __('Slide 2', 'lindeza'),                   'description' => '',             'panel' => 'slider',		'priority' => 140,));
	
}


function lindeza_custom_setting( $controls ) {

     $copyrights = __('Copyright &copy; 2015 '.get_bloginfo('name'). ' All Rights Reserved.', 'lindeza');  
	 $defaulttext = __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus laoreet dui lectus, non lacinia augue cursus Pellentesque molestie tincidunt scelerisque. Nunc rhoncus diam eget enim euismod, sed viverra mi venenatis.', 'lindeza');

     // General Settings	 
	 
	  $controls[] = array('label' => __('Upload logo', "lindeza"),                     'setting' => 'pp_logo_upload',           'type' => 'upload',          'description' => '',                               'default' => '',                                                        'section'     => 'general');	 
      $controls[] = array('label' => __('Copyrights text', "lindeza"),                 'setting' => 'pp_copyrights',            'type' => 'text',            'description' => __( 'Text in footer left', "lindeza"),            'default' => $copyrights,                                               'section'     => 'general');  

     // Home Box 
	 
	  $controls[] = array('label' => __('Home Message Title', "lindeza"),              'setting' => 'home_message_title',            'type' => 'text',          'description' => '',     'default' => '',     'section'     => 'homebox');	 
	  $controls[] = array('label' => __('Home Message Content', "lindeza"),            'setting' => 'home_message_content',          'type' => 'textarea',      'description' => '',     'default' => '',     'section'     => 'homebox');
	  $controls[] = array('label' => __('Home Message Button 1 Text', "lindeza"),      'setting' => 'home_message_button_1_text',    'type' => 'text',          'description' => '',     'default' => '',     'section'     => 'homebox');	
	  $controls[] = array('label' => __('Home Message Button 1 Link', "lindeza"),      'setting' => 'home_message_button_1_link',    'type' => 'text',          'description' => '',     'default' => '',     'section'     => 'homebox');  
	  $controls[] = array('label' => __('Home Message Button 2 Text', "lindeza"),      'setting' => 'home_message_button_2_text',    'type' => 'text',          'description' => '',     'default' => '',     'section'     => 'homebox');  
	  $controls[] = array('label' => __('Home Message Button 2 Link', "lindeza"),      'setting' => 'home_message_button_2_link',    'type' => 'text',          'description' => '',     'default' => '',     'section'     => 'homebox');  

	  $controls[] = array('label' => __('Services Title', "lindeza"),                  'setting' => 'services_title',                'type' => 'text',          'description' => '',     'default' => '',     'section'     => 'homebox');  
	  $controls[] = array('label' => __('Services Content', "lindeza"),                'setting' => 'services_content',              'type' => 'textarea',      'description' => '',     'default' => '',     'section'     => 'homebox');  
	  
	  
	  $controls[] = array('label' => __('Box Title 1', "lindeza"),                     'setting' => 'box_title_1',                   'type' => 'text',          'description' => '',     'default' => '',                 'section'     => 'homebox');	
	  $controls[] = array('label' => __('Box Image 1', "lindeza"),                     'setting' => 'box_image_1',                   'type' => 'upload',        'description' => '',     'default' => '',                 'section'     => 'homebox');  
	  $controls[] = array('label' => __('Box Content 1', "lindeza"),                   'setting' => 'box_content_1',                 'type' => 'textarea',      'description' => '',     'default' => $defaulttext,       'section'     => 'homebox');  
	  $controls[] = array('label' => __('Box Button Text 1', "lindeza"),               'setting' => 'box_button_text_1',             'type' => 'text',          'description' => '',     'default' => '',                 'section'     => 'homebox');  
	  $controls[] = array('label' => __('Box Button Link 1', "lindeza"),               'setting' => 'box_button_link_1',             'type' => 'text',          'description' => '',     'default' => '',                 'section'     => 'homebox');  
      $controls[] = array('label' => __('Besides Text Button', "lindeza"),             'setting' => 'box_besides_link_1',            'type' => 'text',          'description' => '',     'default' => '',                 'section'     => 'homebox');  

	  $controls[] = array('label' => __('Box Title 2', "lindeza"),                     'setting' => 'box_title_2',                   'type' => 'text',          'description' => '',     'default' => '',                 'section'     => 'homebox');	
	  $controls[] = array('label' => __('Box Image 2', "lindeza"),                     'setting' => 'box_image_2',                   'type' => 'upload',        'description' => '',     'default' => '',                 'section'     => 'homebox');  
	  $controls[] = array('label' => __('Box Content 2', "lindeza"),                   'setting' => 'box_content_2',                 'type' => 'textarea',      'description' => '',     'default' => $defaulttext,       'section'     => 'homebox');  
	  $controls[] = array('label' => __('Box Button Text 2', "lindeza"),               'setting' => 'box_button_text_2',             'type' => 'text',          'description' => '',     'default' => '',                 'section'     => 'homebox');  
	  $controls[] = array('label' => __('Box Button Link 2', "lindeza"),               'setting' => 'box_button_link_2',             'type' => 'text',          'description' => '',     'default' => '',                 'section'     => 'homebox');  
      $controls[] = array('label' => __('Besides Text Button', "lindeza"),             'setting' => 'box_besides_link_2',            'type' => 'text',          'description' => '',     'default' => '',                 'section'     => 'homebox');  

	  $controls[] = array('label' => __('Box Title 3', "lindeza"),                     'setting' => 'box_title_3',                   'type' => 'text',          'description' => '',     'default' => '',                 'section'     => 'homebox');	
	  $controls[] = array('label' => __('Box Image 3', "lindeza"),                     'setting' => 'box_image_3',                   'type' => 'upload',        'description' => '',     'default' => '',                 'section'     => 'homebox');  
	  $controls[] = array('label' => __('Box Content 3', "lindeza"),                   'setting' => 'box_content_3',                 'type' => 'textarea',      'description' => '',     'default' => $defaulttext,       'section'     => 'homebox');  
	  $controls[] = array('label' => __('Box Button Text 3', "lindeza"),               'setting' => 'box_button_text_3',             'type' => 'text',          'description' => '',     'default' => '',                 'section'     => 'homebox');  
	  $controls[] = array('label' => __('Box Button Link 3', "lindeza"),               'setting' => 'box_button_link_3',             'type' => 'text',          'description' => '',     'default' => '',                 'section'     => 'homebox');  
      $controls[] = array('label' => __('Besides Text Button', "lindeza"),             'setting' => 'box_besides_link_3',            'type' => 'text',          'description' => '',     'default' => '',                 'section'     => 'homebox');  
	  

     // Slide 1
	 
	 $controls[] = array('label' => __('Title', 'lindeza'),                      'setting' => 'slider_title_1',                     'type' => 'text',              'default' => __('Welcome To Lindeza Theme', 'lindeza' ),      'section' => 'slide1',             'description' => '');
     $controls[] = array('label' => __('Upload Image', 'lindeza'),               'setting' => 'slider_image_upload1',               'type' => 'upload',            'default' => '',                                            'section' => 'slide1',             'description' => __('Upload image for slide', 'lindeza' ));							
	 $controls[] = array('label' => __('Button Text', 'lindeza'),                'setting' => 'slider_button_color_text1',          'type' => 'text',              'default' => __('Read More', 'lindeza' ),                    'section' => 'slide1',             'description' => '' );
	 $controls[] = array('label' => __('Button Link', 'lindeza'),                'setting' => 'slider_button_color_link1',          'type' => 'text',              'default' => '',                                            'section' => 'slide1',             'description' => '' );
	 $controls[] = array('label' => __('Button Text 2', 'lindeza'),              'setting' => 'slider_button_color_text21',          'type' => 'text',              'default' => __('Read More', 'lindeza' ),                    'section' => 'slide1',             'description' => '' );
	 $controls[] = array('label' => __('Button Link 2', 'lindeza'),              'setting' => 'slider_button_color_link21',          'type' => 'text',              'default' => '',                                            'section' => 'slide1',             'description' => '' );

	 $controls[] = array('label' => __('Title', 'lindeza'),                      'setting' => 'slider_title_2',                     'type' => 'text',              'default' => __('Welcome To Lindeza Theme', 'lindeza' ),      'section' => 'slide2',             'description' => '');
	 $controls[] = array('label' => __('Upload Image', 'lindeza'),               'setting' => 'slider_image_upload2',               'type' => 'upload',            'default' => '',                                            'section' => 'slide2',             'description' => __('Upload image for slide', 'lindeza' ));							
	 $controls[] = array('label' => __('Button Text', 'lindeza'),                'setting' => 'slider_button_color_text2',          'type' => 'text',              'default' => __('Read More', 'lindeza' ),                    'section' => 'slide2',             'description' => '' );
	 $controls[] = array('label' => __('Button Link', 'lindeza'),                'setting' => 'slider_button_color_link2',          'type' => 'text',              'default' => '',                                            'section' => 'slide2',             'description' => '' );
	 $controls[] = array('label' => __('Button Text 2', 'lindeza'),              'setting' => 'slider_button_color_text22',         'type' => 'text',              'default' => __('Read More', 'lindeza' ),                    'section' => 'slide2',             'description' => '' );
	 $controls[] = array('label' => __('Button Link 2', 'lindeza'),              'setting' => 'slider_button_color_link22',         'type' => 'text',              'default' => '',                                            'section' => 'slide2',             'description' => '' );


     // Promo
	 $controls[] = array('label' => __( 'Lindeza Promo', 'lindeza' ),                   'setting' => 'custompromo',              'type' => 'promo',                                                                         'section' => 'promo',              'priority' => 10);
	 	
     return $controls;
}
add_filter( 'kirki/controls', 'lindeza_custom_setting' );


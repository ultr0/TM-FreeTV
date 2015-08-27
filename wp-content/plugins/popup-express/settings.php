<?php

class PopupExpress{

    private $plugin_path;
    private $plugin_url;
    private $l10n;
    private $pluginTemplate;
    private $namespace = _popup_express;
    private $settingName = 'Popup Express';

    function __construct() 
    {	
        $this->plugin_path = plugin_dir_path( __FILE__ );
        $this->plugin_url = plugin_dir_url( __FILE__ );
        $this->l10n = 'wp-settings-framework';
        add_action( 'admin_menu', array(&$this, 'admin_menu'), 99 );
        
        // Include and create a new WordPressSettingsFramework
        require_once( $this->plugin_path .'wp-settings-framework.php' );
        $settings_file = $this->plugin_path .'settings/settings-general.php';
        
        $this->pluginTemplate = new WordPressSettingsFramework( $settings_file, $this->namespace, $this->get_settings() );
        // Add an optional settings validation filter (recommended)
        //add_filter( $this->pluginTemplate->get_option_group() .'_settings_validate', array(&$this, 'validate_settings') );
        
       // add_action( 'init', array(&$this, 'plugin_template_register_shortcodes'));
        //for tinymce button add_action('init', array(&$this, 'add_plugin_template_icon'));
        //add_action( 'wp_enqueue_scripts', array(&$this,'plugin_template_stylesheet' ));
       
    }
    
    function admin_menu()
    {
        $page_hook = add_menu_page( __( $this->settingName, $this->l10n ), __( $this->settingName, $this->l10n ), 'update_core', $this->settingName, array(&$this, 'settings_page') );
        add_submenu_page( $this->settingName, __( 'Settings', $this->l10n ), __( 'Settings', $this->l10n ), 'update_core', $this->settingName, array(&$this, 'settings_page') );
    }
    
    function settings_page()
	{
	    // Your settings page
	    
	    ?>
		<div class="wrap">
			<div id="icon-options-general" class="icon32"></div>
			<h2><?php $this->settingName ?></h2>
			
			<h3>Settings</h3>
			<p><a href="http://www.thinklandingpages.com/landingpage/how-to-get-a-double-digit-increase-in-conversions/">Upgrade to Popup Express Pro</a></p>
			<p>Setup your popup form</p>	
			<?php //$this->plugin_template_stylesheet(); 
			?>			
			
			<?php 
			$this->pluginTemplate->settings(); 
			?>
			
		</div>
		<?php
		
		
	}
	
	function validate_settings( $input )
	{
	    // Do your settings validation here
	    // Same as $sanitize_callback from http://codex.wordpress.org/Function_Reference/register_setting
    	return $input;
	}
	
	
        
        function get_settings(){
        	$wpsf_settings[] = array(
		    'section_id' => 'general',
		    'section_title' => $this->settingName.' Settings',
		    //'section_description' => 'Some intro description about this section.',
		    'section_order' => 5,
		    'fields' => array(
		    		array(
			            'id' => 'is_popup_activated',
			            'title' => 'Activate Popup',
			            'desc' => 'Check here to turn popup on.',
			            'type' => 'checkbox',
			            'std' => 0
			        ),
		      		 array(
			            'id' => 'headline',
			            'title' => 'Headline',
			            'desc' => 'Place your headline here.',
			            'type' => 'text',
			            'std' => 'Sign Up To Keep Up With Us',
			        ),
			        array(
			            'id' => 'subheadline',
			            'title' => 'Sub-headline',
			            'desc' => 'Place your sub-headline here.',
			            'type' => 'text',
			            'std' => "We'll keep you informed",
			        ),
			        array(
			            'id' => 'email_form_headline',
			            'title' => 'Email Form Headline',
			            'desc' => 'Place your email form headline here.',
			            'type' => 'text',
			            'std' => 'Sign Up Today',
			        ),
			        array(
			            'id' =>'email_button_text',
			            'title' => 'Email Button Text',
			            'desc' => 'Place your email button text here.',
			            'type' => 'text',
			            'std' => 'Sign Me Up',
			        ), 
			        array(
			            'id' =>'feedburner_id',
			            'title' => 'Feedburner Id',
			            'desc' => 'Place your feedburner id here.',
			            'type' => 'text',
			            'std' => '',
			        ), 
			        array(
			            'id' =>'bullet_1',
			            'title' => 'Bullet 1',
			            //'desc' => 'Place your email button text here.',
			            'type' => 'text',
			            'std' => 'Get on the list today',
			        ), 
			        array(
			            'id' =>'bullet_2',
			            'title' => 'Bullet 2',
			            //'desc' => 'Place your email button text here.',
			            'type' => 'text',
			            'std' => '',
			        ), 
			        array(
			            'id' =>'bullet_3',
			            'title' => 'Bullet 3',
			            //'desc' => 'Place your email button text here.',
			            'type' => 'text',
			            'std' => '',
			        ), 
			        array(
			            'id' =>'bullet_4',
			            'title' => 'Bullet 4',
			            //'desc' => 'Place your email button text here.',
			            'type' => 'text',
			            'std' => '',
			        )
			        
			        
			                       
		        )
		        
        
    );
    return $wpsf_settings;
        }


}
new PopupExpress();

?>
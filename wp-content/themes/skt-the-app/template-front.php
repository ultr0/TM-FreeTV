<?php
/**
	Template Name: Front Page
 * @package SKT The App
 */

get_header(); 
?>

	<?php
	
	// array of section content.
	$section_text = array(
		1 => array(
			'section_title'	=> '',
			'bgcolor' 		=> '#eb5055',
			'bgimage'		=> '',
			'class'			=> 'feature_section',
			'content'		=> '<div class="one_half">
<div class="take-look_manage-desktop">
<div class="takmanage_thum"><img src="'.get_template_directory_uri().'/images/camera.png"></div>
<h4>Take a Look</h4>
Curabitur vestibulum eget mauris quis laoreet. Phasellus in quam laoreet, viverra lacus ut, ultrices velit.</div>
</div><div class="one_half last_column">
<div class="take-look_manage-desktop">
<div class="takmanage_thum"><img src="'.get_template_directory_uri().'/images/desktop.png"></div>
<h4>Manage from desktop</h4>
Curabitur vestibulum eget mauris quis laoreet. Phasellus in quam laoreet, viverra lacus ut, ultrices velit.</div>
</div>
           <div class="clear"></div>
                '
		),
		2 => array(
			'section_title'	=> 'About Us',
			'bgcolor' 		=> '#ffffff',
			'bgimage'		=> '',
			'class'			=> 'about_text',
			'content'		=> 'Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.
			
			
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas scelerisque mauris risus, ut dignissim dolor porta et. Quisque placerat odio arcu, sed mollis elit tempus id. Phasellus maximus, nisi et laoreet commodo, mauris ipsum dapibus nisl, sed scelerisque augue sapien at augue. Ut ac odio vehicula, aliquet eros ac, placerat quam. Etiam dictum lectus in eros scelerisque varius. Aliquam luctus, dui non eleifend maximus, odio neque mollis mi, sit amet pulvinar sem leo sed ligula. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc ut tristique ante. Nunc et elit malesuada, fringilla sem nec, semper tellus. Pellentesque imperdiet egestas magna. Donec a magna rhoncus, porta lectus in, tincidunt quam. Phasellus faucibus dolor ut metus posuere, nec dictum tortor consequat. Duis nec nisi eget tortor dignissim pellentesque nec et turpis. Aliquam mollis bibendum lectus at mollis. Etiam eget turpis orci. Duis luctus auctor lectus, ac mollis tellus imperdiet vel

Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam pharetra magna urna, id dictum nibh dapibus a. Quisque vel imperdiet lorem. Duis dictum, ante sit amet pharetra vestibulum, ante lorem rhoncus sapien, sit amet accumsan lacus turpis sit amet lorem. Phasellus efficitur cursus egestas. Curabitur tempus purus in libero porttitor, nec suscipit lacus porta. Curabitur risus ante, porttitor vitae magna sed, euismod maximus turpis. Suspendisse interdum felis diam, at posuere lorem laoreet id. Ut vitae magna at turpis efficitur facilisis at ac risus. '
		),
		3 => array(
			'section_title'	=> '',
			'bgcolor' 		=> '#303441',
			'bgimage'		=> '',
			'class'			=> 'flexible-design',
			'content'		=> '<div class="flex_content">
            <h2><span>Super</span> Flexible Design</h2>
        Curabitur nisl turpis, interdum ut magna eget, porta facilisis quam. Proin aliquet a tellus id mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent erat eros, auctor nec pulvinar ac, volutpat vel neque. Quisque sed mauris quis eros lobortis sodales. Integer ut tellus dictum, tempor risus ac.
    
        <div class="multiple-colors">Available in multiple colors
            <div class="colour-flex"><a href=""><img src="'.get_template_directory_uri().'/images/colour-flex.png" alt="Colour Flex" /></a></div>
        </div><!--multiple-colors -->
        </div><div class="super-flex">
        <div class="super-flex-thumb"><img src="'.get_template_directory_uri().'/images/marc-smith.png" alt="Marc Smith" /></div>
        </div>
        '
		),
		4 => array(
			'section_title'	=> '',
			'bgcolor' 		=> '#ffffff',
			'bgimage'		=> '',
			'class'			=> 'responsive-design',
			'content'		=> '<div class="responsive_content">
    	<h2><span>Responsive</span> Design</h2>   
Curabitur nisl turpis, interdum ut magna eget, porta facilisis quam. Proin aliquet a tellus id mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra.
<div class="responsive-read"><a href="#"> Read More </a></div>
    </div>'
		),
		5 => array(
			'section_title'	=> '',
			'bgcolor' 		=> '#303441',
			'bgimage'		=> '',
			'class'			=> 'home_portfolio',
			'content'		=> '<h2>Support</h2>
Donec sed arcu eget dolor placerat ultrices. In hac habitasse platea dictumst. Vivamus viverra sapien dolor, nec pretium metus scelerisque a. Maecenas leo risus, porttitor eu faucibus at, pharetra ut tellus. Sed ac dolor feugiat, interdum magna eu, bibendum odio. In vitae rutrum velit. Donec pulvinar non felis sit amet dapibus. Aenean ornare quis turpis non aliquam. Nulla facilisi. Aliquam dui elit, accumsan id lectus sed, volutpat feugiat felis. Phasellus venenatis neque accumsan mauris feugiat, non semper nisi rutrum. Nullam malesuada magna a tempus hendrerit. Aenean quam nunc, bibendum et volutpat tincidunt, ultrices eleifend quam

Etiam vel pharetra eros, non semper metus. Nam in hendrerit purus. Praesent posuere rutrum efficitur. Integer ut pulvinar felis. Quisque non ullamcorper nisi. Morbi accumsan velit non nisl pretium tincidunt. Aliquam porta mi fringilla magna scelerisque, a convallis felis accumsan. 
        <div class="space10"></div>'
		),
		6 => array(
			'section_title'	=> '',
			'bgcolor' 		=> '#ffffff',
			'bgimage'		=> '',
			'class'			=> 'get-theapp',
			'content'		=> '<div class="container">
            	                <h2>Get <span>The App</span> for $39</h2>
<p> Maecenas eu augue dictum, adipiscing nunc quis, porta quam. In hac habitasse platea dictumst.</p>
<p>&nbsp;</p>
<p>Available on all platforms</p>
<div class="space10"></div>
<div class="app_thumbimgs"><br>
<a target="_blank" href="#"><img src="'.get_template_directory_uri().'/images/app-store.png"></a><a target="_blank" href="#"><img src="'.get_template_directory_uri().'/images/google-play.png"></a><a target="_blank" href="#"><img src="'.get_template_directory_uri().'/images/Windows-Phone.png"></a><a target="_blank" href="#"><img src="'.get_template_directory_uri().'/images/BlackBerry-World.png"></a>
</div>
                <div class="clear"></div>
            </div>'
		),
		7 => array(
			'section_title'	=> 'Get the Quote',
			'bgcolor' 		=> '#eb5055',
			'bgimage'		=> '',
			'class'			=> 'contact',
			'content'		=> 'Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.
			<div class="contact_info">[contact-form-7 id="4" title="Contact form 1"]</div><div class="quick_info">
        	<h5>Contact Information</h5>
            <p>Quisque hendrerit purus dapibus, ornare nibh vitae, viverra nibh. Fusce vitae aliquam tellus. Proin sit amet volutpat libero. Nulla sed nunc et tortor luctus faucibus. Morbi at aliquet turpis, et consequat felis. </p>
            <div class="location">Elm St. 14/05 Lost City </div>
            <div class="tel-phone"><a href="tel:">03528 331 86 35</a> </div>
            <div class="email"><a href="mailto:info@singolo.com">info@singolo.com</a></div>
        </div>'
		),
	);
	
	 ?>

	<?php
    if( of_get_option('numsection', true) > 0 ) { 
        $numSections = esc_attr( of_get_option('numsection', 7) );
        for( $s=1; $s<=$numSections; $s++ ){ 
            $title 		= ( of_get_option('sectiontitle'.$s, true) != '' ) ? esc_html( of_get_option('sectiontitle'.$s, $section_text[$s]['section_title']) ) : '';
            $class		= ( of_get_option('sectionclass'.$s, true) != '' ) ? esc_html( of_get_option('sectionclass'.$s, $section_text[$s]['class']) ) : '';
            $content	= ( of_get_option('sectioncontent'.$s, true) != '' ) ? of_get_option('sectioncontent'.$s, $section_text[$s]['content']) : ''; 
            $bgcolor	= ( of_get_option('sectionbgcolor'.$s, true) != '' ) ? of_get_option('sectionbgcolor'.$s, $section_text[$s]['bgcolor']) : ''; 
            ?>
            <section id="section<?php echo $s; ?>" <?php if($bgcolor!=''){?>style="background-color:<?php echo $bgcolor;?>;"<?php } ?>>
                <div class="container <?php echo $class; ?>">
                    <?php if( $title != '' ) { ?>
                        <h2><?php echo $title; ?></h2>
                    <?php } ?>
                    <?php the_app_content_format( $content ); ?>
                    <div class="clear"></div>
                </div>
            </section><?php 
        }
    }
    ?>

<?php get_footer(); ?>
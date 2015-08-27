<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package SKT The App
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="wrapper_main <?php if ( of_get_option('layout', true) != 'box' ) { echo 'layout_wide'; } else { echo 'layout_box';}?>" >

        <header class="header">
        		<div class="header-align">
        		
                </div>
        	<div class="container-head">
                <div id="logo">
                        <?php if( of_get_option('logo',true) == 1 || of_get_option('logo',true) == '') { ?>
                        	<a href="<?php echo esc_url( home_url('/'));?>"><h1><?php bloginfo('name'); ?></h1></a>
                            <p class="description"><?php bloginfo('description'); ?></p>
                        <?php } else { ?>
                        	<a href="<?php echo esc_url( home_url('/'));?>"><img src="<?php echo esc_url(of_get_option('logo',true)); ?>" /></a>
                        <?php } ?>
                    
                </div>
                <div class="header_right">
                    <div class="mobile_nav"><a href="#"><?php _e('Go To...','the-app'); ?></a></div>
                    <nav id="nav">
                        <?php wp_nav_menu( array('theme_location'  => 'primary', 'container' => '', 'container_class' => '', 'items_wrap' => '<ul>%3$s</ul>' ) ); ?>
                    </nav>
                </div>
	            <div class="clear"></div>
            </div>
        </header>
		<?php if ( is_front_page() || is_page_template( 'template-front.php' )) {?>
        <section class="home_slider">
        	<?php
				$default_images = array(
				1 => array(
					'slide_image' => get_template_directory_uri()."/images/slides/1slide1.png",
					'slide_title' => 'Free Business WordPress Theme',
					'slide_desc'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut leo augue, posuere id commodo quis, malesuada in justo. Nulla nunc purus, interdum quis imperdiet in, placerat id felis. Duis sodales iaculis mauris.'
				),
				2 => array(
					'slide_image' => get_template_directory_uri()."/images/slides/2slide2.png",
					'slide_title' => 'Fully Responsive WordPress Theme',
					'slide_desc'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut leo augue, posuere id commodo quis, malesuada in justo. Nulla nunc purus, interdum quis imperdiet in, placerat id felis. Duis sodales iaculis mauris.'
				),
				3 => array(
					'slide_image' => get_template_directory_uri()."/images/slides/3slide3.png",
					'slide_title' => 'Easy to Use',
					'slide_desc'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut leo augue, posuere id commodo quis, malesuada in justo. Nulla nunc purus, interdum quis imperdiet in, placerat id felis. Duis sodales iaculis mauris.'
				),
				4 => array(
					'slide_image' => get_template_directory_uri()."/images/slides/2slide2.png",
					'slide_title' => 'Fully Responsive WordPress Theme',
					'slide_desc'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut leo augue, posuere id commodo quis, malesuada in justo. Nulla nunc purus, interdum quis imperdiet in, placerat id felis. Duis sodales iaculis mauris.'
				),
				5 => array(
					'slide_image' => get_template_directory_uri()."/images/slides/3slide3.png",
					'slide_title' => 'Easy to Use',
					'slide_desc'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut leo augue, posuere id commodo quis, malesuada in justo. Nulla nunc purus, interdum quis imperdiet in, placerat id felis. Duis sodales iaculis mauris.'
				)
			); 
			?>
        	<?php
			$slAr = array();
			$m = 0;
			for ($i=1; $i<6; $i++) {
				if ( of_get_option('slide'.$i, true) != "" ) {
					$imgSrc 	= of_get_option('slide'.$i,$default_images[$i]['slide_image']);
					$imgTitle	= of_get_option('slidetitle'.$i, $default_images[$i]['slide_title']);
					$imgDesc	= of_get_option('slidedesc'.$i, $default_images[$i]['slide_desc']);
					$imgLink	= of_get_option('slideurl'.$i, true);
					if ( strlen($imgSrc) > 3 ) {
						$slAr[$m]['image_src'] = of_get_option('slide'.$i, $default_images[$i]['slide_image']);
						$slAr[$m]['image_title'] = of_get_option('slidetitle'.$i, $default_images[$i]['slide_title']);
						$slAr[$m]['image_desc'] = of_get_option('slidedesc'.$i, $default_images[$i]['slide_desc']);
						$slAr[$m]['image_link'] = of_get_option('slideurl'.$i, true);
						$m++;
					}
				}
			}
			$slideno = array();
			if( $slAr > 0 ){
				$n = 0;?>
                <div class="slider-wrapper theme-default"><div id="slider" class="nivoSlider">
                <?php 
                foreach( $slAr as $sv ){
                    $n++; ?><img src="<?php echo esc_url($sv['image_src']); ?>" alt="<?php echo esc_attr($sv['image_title']);?>" title="<?php if ( ($sv['image_title']!='') && ($sv['image_desc']!='') ) { echo esc_attr('#slidecaption'.$n ); } ?>" /><?php
                    $slideno[] = $n;
                }
                ?>
                </div><?php
                foreach( $slideno as $sln ){ ?>
                    <div id="slidecaption<?php echo $sln; ?>" class="nivo-html-caption">
                    <div class="slide_info">
                        <?php if( of_get_option('slidetitle'.$sln, true) != '' ){ ?>
                            <h1><a href="<?php echo esc_url( of_get_option('slideurl'.$sln, '#')); ?>"><?php echo esc_html(of_get_option('slidetitle'.$sln, $default_images[$sln]['slide_title'])); ?></a></h1>
                        <?php } ?>
                        <?php if( of_get_option('slidedesc'.$sln, true) != '' ){ ?>
                            <p><?php echo esc_html(of_get_option('slidedesc'.$sln, $default_images[$sln]['slide_desc'])); ?></p>
                        <?php } ?>
                    </div>
                    </div><?php 
                } ?>
                </div>
                <div class="clear"></div><?php 
			}
            ?>
        </section>
        <?php } ?>
<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Lindeza
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
		 <div class="top-slider">
			<div class="item">
				<?php if(get_theme_mod('slider_image_upload1')) { ?><img src="<?php echo esc_url(get_theme_mod('slider_image_upload1')); ?>"/><?php } ?>
				<div class="black-back"></div>
				<div class="carousel-caption">
					<?php if(get_theme_mod('slider_title_1')) { ?><h4><?php echo esc_html(get_theme_mod('slider_title_1')); ?></h4><?php } ?>
					<?php if(get_theme_mod('slider_button_color_text1')) { ?><a href="<?php echo esc_url(get_theme_mod('slider_button_color_link1')); ?>" class="button"><?php echo esc_html(get_theme_mod('slider_button_color_text1')); ?></a><?php } ?>
					<?php if(get_theme_mod('slider_button_color_text21')) { ?><a href="<?php echo esc_url(get_theme_mod('slider_button_color_link21')); ?>" class="button"><?php echo esc_html(get_theme_mod('slider_button_color_text21')); ?></a><?php } ?>
				</div>
			</div>	
			<div class="item">
				<?php if(get_theme_mod('slider_image_upload2')) { ?><img src="<?php echo esc_url(get_theme_mod('slider_image_upload2')); ?>"/><?php } ?>
				<div class="black-back"></div>
				<div class="carousel-caption">
					<?php if(get_theme_mod('slider_title_2')) { ?><h4><?php echo esc_html(get_theme_mod('slider_title_2')); ?></h4><?php } ?>
					<?php if(get_theme_mod('slider_button_color_text2')) { ?><a href="<?php echo esc_url(get_theme_mod('slider_button_color_link2')); ?>" class="button"><?php echo esc_html(get_theme_mod('slider_button_color_text2')); ?></a><?php } ?>
					<?php if(get_theme_mod('slider_button_color_text22')) { ?><a href="<?php echo esc_url(get_theme_mod('slider_button_color_link22')); ?>" class="button"><?php echo esc_html(get_theme_mod('slider_button_color_text22')); ?></a><?php } ?>
				</div>
			</div>	
		</div>
        <div class="menu-logo">
            <div class="wrapper">
				<?php if ( get_theme_mod('pp_logo_upload') ) { ?>
				     <h1><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(get_theme_mod('pp_logo_upload')); ?>" /></a></h1> 
				<?php } else {  ?>
					<h1><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1> 
				<?php } ?>
                <nav class="menu-mobile">
                    <a class="mobile-click">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
					<?php if ( has_nav_menu( 'main-menu' ) ) { ?>
						<?php wp_nav_menu( array('container'=> '', 'theme_location' => 'main-menu', 'items_wrap'  => '<ul class="menu-top">%3$s</ul>'  ) ); ?>
					<?php } else { ?>
						<?php wp_nav_menu(  array( 'menu_class'  => 'menu-top') ); ?>	
					<?php } ?>
                </nav>
                <nav class="menu-top-container">
					<?php if ( has_nav_menu( 'main-menu' ) ) { ?>
						<?php wp_nav_menu( array('container'=> '', 'theme_location' => 'main-menu', 'items_wrap'  => '<ul class="menu-top">%3$s</ul>'  ) ); ?>
					<?php } else { ?>
						<?php wp_nav_menu(  array( 'menu_class'  => 'menu-top') ); ?>	
					<?php } ?>
                </nav>
            </div>
        </div>
    </header>
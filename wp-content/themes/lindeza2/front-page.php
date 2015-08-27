<?php 
/**
 * 
 * @package Lindeza 
 */
get_header(); 
if ( have_posts() ) : 
if ( 'posts' == get_option( 'show_on_front')) {
?>
		 <header>
			<div class="page-title">
			   <div class="wrapper">
				   <h2><?php _e( 'Blog', 'lindeza'); ?></h2>
			   </div>
		   </div>
		 </header>
		 <?php get_template_part( 'content', 'posts' ); ?>									
<?php } else { ?>		
        <?php get_template_part( 'content', 'home' ); ?>
<?php } 
endif; 
get_footer(); ?>
<?php
/**
 * The main template file.
 *
 * @package Lindeza
 */
get_header(); ?>
 	 <header>
		<div class="page-title">
		   <div class="wrapper">
			   <h2><?php _e( 'Blog', 'lindeza'); ?></h2>
		   </div>
	   </div>
	 </header>
     <?php get_template_part( 'content', 'posts' ); ?>									
<?php get_footer(); ?>
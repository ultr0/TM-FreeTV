<?php
/**
 * The template for displaying category
 *
 *
 * @package Lindeza
 */
 get_header(); ?>
 	 <header>
		<div class="page-title">
		   <div class="wrapper">
			   <h2><?php printf( __( 'Category Archives: %s', 'lindeza' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h2>
		   </div>
	   </div>
	</header>
    <?php get_template_part( 'content', 'posts' ); ?>									
<?php get_footer(); ?>
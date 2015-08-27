<?php
/**
 * The template for displaying search
 *
 * @package Lindeza
 */
 get_header(); ?>
 	 <header>
		<div class="page-title">
		   <div class="wrapper">
			   <h2><?php printf( __( 'Search Results for: %s', 'lindeza' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
		   </div>
	   </div>
	 </header>
     <?php get_template_part( 'content', 'posts' ); ?>
<?php get_footer(); ?>
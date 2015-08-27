<?php
/**
 * The template for displaying page NOT FOUND.
 *
 * @package Lindeza
 */
 get_header(); ?>
 <header>
	<div class="page-title">
	   <div class="wrapper">
		   <h2><?php _e( 'Not found', 'lindeza' ); ?></h2>
	   </div>
   </div>
 </header>
 <div class="mainContainer blog-page">
	<div class="content">
		<div class="wrapper">
			<div class="content-blog-big">
				<div class="blog-single">
					<div class="content-blog">
						<p><?php _e( 'Sorry, but you are looking for something that isn\'t here.', 'lindeza' ); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
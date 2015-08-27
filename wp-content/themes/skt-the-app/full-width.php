<?php
/**
Template name: Full Width

 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package SKT The App
 */

get_header(); ?>

<?php
if( has_post_thumbnail() ){
	echo '<div class="container">';
	the_post_thumbnail('full');
	echo '</div>';
}
?>

<div class="content-area">
    <div class="container-innner">
        <section class="site-main" id="sitefull">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php
				//If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() )
					comments_template();
				?>
               
			<?php endwhile; // end of the loop. ?>
        </section>
        <div class="clear"></div>
    </div>
</div>

<?php get_footer(); ?>
<?php
/**
 * The template for displaying home page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package SKT The App
 */

get_header(); 
?>

<div class="content-area">
    <div class="container-inner">
        <section class="site-main" id="sitemain">
            <div class="blog-post">
				<?php //$query = new WP_Query( array( 'post' => $paged ) ); ?>
                <?php if( have_posts() ) : ?>
					<?php while( have_posts() ) : the_post(); ?>
	                	<?php get_template_part( 'content', get_post_format() ); ?>
	                <?php endwhile; ?>
					<?php the_app_pagination(); ?>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
	                <?php get_template_part( 'no-results', 'index' ); ?>
                <?php endif; ?>
            </div><!-- blog-post -->
        </section>
        <?php get_sidebar();?>
        <div class="clear"></div>
    </div>
</div>

<?php get_footer(); ?>
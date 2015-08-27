<?php
/**
 * The template for displaying all pages.
 *
 * @package Lindeza
 */
 get_header(); ?>
 <?php while (have_posts()) : the_post(); ?>
 	 <header>
		<div class="page-title">
		   <div class="wrapper">
			   <h2><?php _e( 'Blog', 'lindeza'); ?></h2>
		   </div>
	   </div>
	 </header>
     <div class="mainContainer blog-page">
        <div class="content">
            <div class="wrapper">
                <div class="content-blog-big">
                    <div class="blog-single">
                        <div class="content-blog">
                            <h3><?php the_title(); ?></h3>
                            <div class="spans">
                                <span><i class="icon-user"></i><?php _e( 'By', 'lindeza' ); ?> <?php the_author(); ?></span>
                                <span><i class="icon-calendar-empty"></i><?php the_time( get_option( 'date_format' ) ); ?></span>
                            </div>
                           <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
									<?php the_post_thumbnail($post->ID, 'featured'); ?>	
							<?php endif; ?>
                            <?php the_content(); ?>
                        </div>
                        <div class="tags-social">
                            <div class="left">
                                <p class="left"><?php the_tags(); ?></p>
                            </div>
                        </div>
                        <div class="comment-block">
                            <?php comments_template(); ?>
                        </div>
                    </div>
                    <?php  get_sidebar(); ?>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; ?>
<?php get_footer(); ?>
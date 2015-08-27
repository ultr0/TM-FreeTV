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
			   <h2><?php the_title(); ?></h2>
		   </div>
	   </div>
	 </header>
     <div class="mainContainer blog-page">
        <div class="content">
            <div class="wrapper">
                <div class="content-blog-big">
                    <div class="blog-single">
                        <div class="content-blog">
                           <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
									<?php the_post_thumbnail($post->ID, 'featured'); ?>	
							<?php endif; ?>
                            <?php the_content(); ?>
                        </div>
                       	<p><?php posts_nav_link(); ?></p>
						<?php lindeza_paginate_page(); ?> 
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
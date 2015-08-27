<?php 
/**
 * 
 * @package Lindeza 
 */
?>
<div class="mainContainer blog-page">
	<div class="content">
		<div class="wrapper">		
			<div class="content-blog-big">
				<div class="blog-posts">
					<?php while (have_posts()) : the_post(); ?>
					<div class="one-blog">
						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="blog-block">
								<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
									<?php the_post_thumbnail($post->ID); ?>
								<?php endif; ?>	
								<div class="content-blog">
									<h3><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php if(get_the_title($post->ID)) { the_title(); } else { the_time( get_option( 'date_format' ) ); } ?></a></h3>
									<div class="spans">
										<span><i class="icon-user"></i><?php _e( 'by', 'lindeza' ); ?> <?php the_author(); ?></span>
										<span><i class="icon-calendar-empty"></i><?php the_time( get_option( 'date_format' ) ); ?></span>
									</div>
									<?php the_excerpt(); ?>
									<a class="more" href="<?php the_permalink() ?>"><?php _e( 'Read More', 'lindeza' ); ?></a>
								</div>
							</div>
						</div>
					</div>
					<?php endwhile; ?>	
					<span class="prev"><?php next_posts_link(__('Previous Posts', 'lindeza')) ?></span>
					<span class="next"><?php previous_posts_link(__('Next posts', 'lindeza')) ?></span>	
				</div>
				<?php  get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>	
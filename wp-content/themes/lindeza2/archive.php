<?php
/**
 * The template for displaying archive
 *
 *
 * @package Lindeza
 */
get_header(); ?>
 	 <header>
		<div class="page-title">
		   <div class="wrapper">
			   <h2><?php
						if ( is_day() ) :
							printf( __( 'Daily Archives: %s', 'lindeza' ), '<span>' . get_the_date() . '</span>' );
						elseif ( is_month() ) :
							printf( __( 'Monthly Archives: %s', 'lindeza' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'lindeza' ) ) . '</span>' );
						elseif ( is_year() ) :
							printf( __( 'Yearly Archives: %s', 'lindeza' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'lindeza' ) ) . '</span>' );
						else :
							_e( 'Archives', 'lindeza' );
						endif;
					?></h2>
		   </div>
	   </div>
	</header>
    <?php get_template_part( 'content', 'posts' ); ?>
<?php get_footer(); ?>
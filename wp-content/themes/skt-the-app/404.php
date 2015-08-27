<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package SKT The App
 */

get_header(); ?>

<div class="content-area">
    <div class="container-inner">
        <section class="site-main" id="sitefull">
            <header class="page-header">
                <h1 class="title-404"><?php _e( '<strong>404</strong> Not Found', 'the-app' ); ?></h1>
            </header><!-- .page-header -->
            <div class="page-content">
                <p class="text-404"><?php _e( 'Looks like you have taken a wrong turn.....<br />Don\'t worry... it happens to the best of us.', 'the-app' ); ?></p>
                
            </div><!-- .page-content -->
        </section>
        <div class="clear"></div>
    </div>
</div>

<?php get_footer(); ?>
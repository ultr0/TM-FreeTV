<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package SKT The App
 */
?>
	<div class="clear"></div>

<div id="copyright">
	<div class="container">
    	<div class="left"><?php _e('Copyright &copy; 2015 The App. Theme by','the-app'); ?><a href="<?php echo esc_url(SKT_URL); ?>" target="_blank"><?php _e('SKT Themes','the-app'); ?>.</a></div>
    	<div class="social_media">
        	<?php if( of_get_option('fbicon', true) != ''){ ?>
            	<a class="fb" href="<?php echo esc_url(of_get_option('fbicon', true)); ?>" target="_blank"></a>
            <?php } ?>
            <?php if(of_get_option('gplusicon', true) != ''){ ?>
            	<a class="gp" href="<?php echo esc_url(of_get_option('gplusicon', true)); ?>" target="_blank"></a>
            <?php } ?>
            <?php if( of_get_option('twitticon', true) != ''){ ?>
            	<a class="tw" href="<?php echo esc_url(of_get_option('twitticon', true)); ?>" target="_blank"></a>
            <?php } ?>
            <?php if( of_get_option('linkedicon', true) != ''){ ?>
            	<a class="in" href="<?php echo esc_url(of_get_option('linkedicon', true)); ?>" target="_blank"></a>
            <?php } ?>
         </div><!-- social_media -->
        <div class="clear"></div>
    </div>
    <?php if( is_home() || is_front_page() ) { ?>
    <div id="jump"><a href="#"><?php _e('Top','the-app'); ?></a></div>
    <?php } ?>
</div>
</div>
<?php wp_footer(); ?>

</body>
</html>
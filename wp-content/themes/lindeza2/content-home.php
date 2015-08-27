<?php 
/**
 * 
 * @package Lindeza 
 */
?>
    <div class="mainContainer">
	    <?php if ( get_theme_mod('home_message_title') ) { ?>
        <div class="content">
            <div class="wrapper">
				<?php if ( get_theme_mod('home_message_title') ) { ?><h2><?php echo esc_html(get_theme_mod('home_message_title')); ?></h2><?php } ?>
                <?php if ( get_theme_mod('home_message_content') ) { ?><p><?php echo esc_html(get_theme_mod('home_message_content')); ?></p><?php } ?>
                <?php if ( get_theme_mod('home_message_button_1_text') ) { ?><a class="button" href="<?php echo esc_url(get_theme_mod('home_message_button_1_link')); ?>"><?php echo esc_html(get_theme_mod('home_message_button_1_text')); ?></a><?php } ?>
                <?php if ( get_theme_mod('home_message_button_2_text') ) { ?><a class="button" href="<?php echo esc_url(get_theme_mod('home_message_button_2_link')); ?>"><?php echo esc_html(get_theme_mod('home_message_button_2_text')); ?></a><?php } ?>
            </div>
        </div>
		<?php } ?>
        <div class="donation">
            <div class="black-back"></div>
            <div class="content-donation">
                <div class="wrapper">
                    <?php if ( get_theme_mod('services_title') ) { ?><h3><?php echo esc_html(get_theme_mod('services_title')); ?></h3><?php } ?>
                    <?php if ( get_theme_mod('services_content') ) { ?><p><?php echo esc_html(get_theme_mod('services_content')); ?></p><?php } ?>
					<div class="block-donations">
					    <?php if(get_theme_mod('box_title_1')) { ?>
						<div class="one-donation">
							<?php if(get_theme_mod('box_image_1')) { ?>
							<div class="image">
								<img src="<?php echo esc_url(get_theme_mod('box_image_1')); ?>"/>
								<div class="hover"></div>
							</div>
							<?php } ?>
							<div class="text">
								<?php if(get_theme_mod('box_title_1')) { ?><h3><a href="<?php echo esc_url(get_theme_mod('box_button_link_1')); ?>"><?php echo esc_html(get_theme_mod('box_title_1')); ?></a></h3><?php } ?>
								<?php if(get_theme_mod('box_content_1')) { ?><p><?php echo esc_html(get_theme_mod('box_content_1')); ?></p><?php } ?>
								<?php if(get_theme_mod('box_button_text_1')) { ?><p><a href="<?php echo esc_url(get_theme_mod('box_button_link_1')); ?>" class="donate-link"><?php echo esc_html(get_theme_mod('box_button_text_1')); ?></a> <?php echo esc_html(get_theme_mod('box_besides_link_1')); ?></p><?php } ?>
							</div>
						</div>	
						<?php } ?>
						<?php if(get_theme_mod('box_title_2')) { ?>
						<div class="one-donation">
							<?php if(get_theme_mod('box_image_2')) { ?>
							<div class="image">
								<img src="<?php echo esc_url(get_theme_mod('box_image_2')); ?>"/>
								<div class="hover"></div>
							</div>
							<?php } ?>
							<div class="text">
								<?php if(get_theme_mod('box_title_2')) { ?><h3><a href="<?php echo esc_url(get_theme_mod('box_button_link_2')); ?>"><?php echo esc_html(get_theme_mod('box_title_2')); ?></a></h3><?php } ?>
								<?php if(get_theme_mod('box_content_2')) { ?><p><?php echo esc_html(get_theme_mod('box_content_2')); ?></p><?php } ?>
								<?php if(get_theme_mod('box_button_text_2')) { ?><p><a href="<?php echo esc_url(get_theme_mod('box_button_link_2')); ?>" class="donate-link"><?php echo esc_html(get_theme_mod('box_button_text_2')); ?></a> <?php echo esc_html(get_theme_mod('box_besides_link_2')); ?></p><?php } ?>
							</div>
						</div>	
						<?php } ?>
						<?php if(get_theme_mod('box_title_3')) { ?>
						<div class="one-donation">
							<?php if(get_theme_mod('box_image_3')) { ?>
							<div class="image">
								<img src="<?php echo esc_url(get_theme_mod('box_image_3')); ?>"/>
								<div class="hover"></div>
							</div>
							<?php } ?>
							<div class="text">
								<?php if(get_theme_mod('box_title_3')) { ?><h3><a href="<?php echo esc_url(get_theme_mod('box_button_link_3')); ?>"><?php echo esc_html(get_theme_mod('box_title_3')); ?></a></h3><?php } ?>
								<?php if(get_theme_mod('box_content_3')) { ?><p><?php echo esc_html(get_theme_mod('box_content_3')); ?></p><?php } ?>
								<?php if(get_theme_mod('box_button_text_3')) { ?><p><a href="<?php echo esc_url(get_theme_mod('box_button_link_3')); ?>" class="donate-link"><?php echo esc_html(get_theme_mod('box_button_text_3')); ?></a> <?php echo esc_html(get_theme_mod('box_besides_link_3')); ?></p><?php } ?>
							</div>
						</div>
                        <?php } ?>						
					</div>				
                </div>
            </div>
        </div>
    </div>
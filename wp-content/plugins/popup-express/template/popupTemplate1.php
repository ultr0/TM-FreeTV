<?php
	global $popup_express_options;
	global $popup_express_option_start;

?>  
   
    
    
    <div id="pe_content">
        <div id="pe_headline">
          <?php echo $popup_express_options[$popup_express_option_start.'headline']; ?>
        </div>
        <div id="pe_subheadline">
        	<?php echo $popup_express_options[$popup_express_option_start.'subheadline']; ?>
  	</div>
        <div id="pe_body">
        	<div id="pe_body_one">
			<ul id="pe_bullet_list">
				<?php
					if(pe_isset($popup_express_options[$popup_express_option_start.'bullet_1'])){
				?>
				<li><?php echo $popup_express_options[$popup_express_option_start.'bullet_1']; ?></li>
				<?php 
					}
					if(pe_isset($popup_express_options[$popup_express_option_start.'bullet_2'])){
				?>
				<li><?php echo $popup_express_options[$popup_express_option_start.'bullet_2']; ?></li>
				<?php 
					}
					if(pe_isset($popup_express_options[$popup_express_option_start.'bullet_3'])){
				?>
				<li><?php echo $popup_express_options[$popup_express_option_start.'bullet_3']; ?></li>
				<?php 
					}
					if(pe_isset($popup_express_options[$popup_express_option_start.'bullet_4'])){
				?>
				<li><?php echo $popup_express_options[$popup_express_option_start.'bullet_4']; ?></li>
				<?php 
					}
				?>
			</ul>
        	</div>
        	<div id="pe_body_two">
        		<div id="pe_email_form">
				<form class="form-container" action="http://feedburner.google.com/fb/a/mailverify" method="post">
					<div class="form-title"><h2><?php echo $popup_express_options[$popup_express_option_start.'email_form_headline']; ?></h2></div>
					<input class="form-field" type="text" name="email" placeholder="Enter Your Email"/><br />
					<input type="hidden" value="<?php echo $popup_express_options[$popup_express_option_start.'feedburner_id']; ?>" name="uri"/>
					<input type="hidden" name="loc" value="en_US"/>
					<div class="submit-container">
					<input class="submit-button" type="submit" value="<?php echo $popup_express_options[$popup_express_option_start.'email_button_text']; ?>" />
					</div>
				</form>
			</div>
        	</div>
        </div>
        <div id="pe_button_div">
		<button type="button" name="close" class="close" id="pe_button">Close</button>
        </div>
    </div>
        
    

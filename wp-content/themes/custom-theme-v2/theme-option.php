<?php

add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

/* Init plugin options to white list our options */
function theme_options_init(){
register_setting( 'sample_options', 'cOptn' );
}

/* Load up the menu page */
function theme_options_add_page() {
add_theme_page( __( 'Theme Options', 'sampletheme' ), __( 'Quick Links', 'sampletheme' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}

/* Create the options page */
function theme_options_do_page() {

	if ( ! isset( $_REQUEST['settings-updated'] ) )
		$_REQUEST['settings-updated'] = false; ?>
    
        <form method="post" action="options.php" >
			<?php settings_fields( 'sample_options' ); ?>
			<?php $options = get_option( 'cOptn' ); ?>

			<table class="form-table">
				<tr valign="top"><th scope="row"><?php _e( 'Website Logo', 'sampletheme' ); ?></th>
					<td>
						<img src="<?php echo esc_textarea( $options['logo'] ?? ''); ?>" alt="No File Found" class="logourlshow" style="font-size: 20px;font-weight: 900;border: 3px solid white;padding: 20px;height:200px;"></br></br>
						<input id="cOptn[logo]" class="large-text logourl" type="hidden" name="cOptn[logo]" value="<?php echo esc_textarea( $options['logo'] ?? ''); ?>">
						<input id="upload_logo_button" class="button" type="button" value="Upload Image" />
					</td>
				</tr> 
				<tr valign="top"><th scope="row"><?php _e( 'Website Footer Logo', 'sampletheme' ); ?></th>
					<td>
						<img src="<?php echo esc_textarea( $options['footer-logo'] ?? ''); ?>" alt="No File Found" class="footer-logourlshow" style="font-size: 20px;font-weight: 900;border: 3px solid white;padding: 20px;height:200px;"></br></br>
						<input id="cOptn[footer-logo]" class="large-text footer-logourl" type="hidden" name="cOptn[footer-logo]" value="<?php echo esc_textarea( $options['footer-logo'] ?? ''); ?>">
						<input id="upload_footer-logo_button" class="button" type="button" value="Upload Image" />
					</td>
				</tr>                  
		        <tr valign="top"><th scope="row"><?php _e( 'Facebook', 'sampletheme' ); ?></th>
					<td>
						<input id="cOptn[facebook]" class="large-text" type="text" name="cOptn[facebook]" value="<?php echo esc_textarea( $options['facebook'] ?? ''); ?>">
		                <label class="description" for="cOptn[facebook]"><?php _e( 'Please Enter Facebook URL', 'sampletheme' ); ?></label>
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'WhatsApp', 'sampletheme' ); ?></th>
					<td>
						<input id="cOptn[whatsapp]" class="large-text" type="text" name="cOptn[whatsapp]" value="<?php echo esc_textarea( $options['whatsapp'] ?? ''); ?>">
		                <label class="description" for="cOptn[whatsapp]"><?php _e( 'Please Enter WhatsApp URL', 'sampletheme' ); ?></label>
					</td>
				</tr>
		        <tr valign="top"><th scope="row"><?php _e( 'Instagram', 'sampletheme' ); ?></th>
					<td>
						<input id="cOptn[instagram]" class="large-text" type="text" name="cOptn[instagram]" value="<?php echo esc_textarea( $options['instagram'] ?? ''); ?>">
		                <label class="description" for="cOptn[instagram]"><?php _e( 'Please Enter Instagram URL', 'sampletheme' ); ?></label>
					</td>
				</tr>
		        <tr valign="top"><th scope="row"><?php _e( 'YouTube', 'sampletheme' ); ?></th>
					<td>
						<input id="cOptn[youtube]" class="large-text" type="text" name="cOptn[youtube]" value="<?php echo esc_textarea( $options['youtube'] ?? ''); ?>">
		                <label class="description" for="cOptn[youtube]"><?php _e( 'Please Enter YouTube URL', 'sampletheme' ); ?></label>
					</td>
				</tr>
		        <tr valign="top"><th scope="row"><?php _e( 'Twitter', 'sampletheme' ); ?></th>
					<td>
						<input id="cOptn[twitter]" class="large-text" type="text" name="cOptn[twitter]" value="<?php echo esc_textarea( $options['twitter'] ?? ''); ?>">
		                <label class="description" for="cOptn[twitter]"><?php _e( 'Please Enter Twitter URL', 'sampletheme' ); ?></label>
					</td>
				</tr>
		        <tr valign="top"><th scope="row"><?php _e( 'TikTok', 'sampletheme' ); ?></th>
					<td>
						<input id="cOptn[tiktok]" class="large-text" type="text" name="cOptn[tiktok]" value="<?php echo esc_textarea( $options['tiktok'] ?? ''); ?>">
		                <label class="description" for="cOptn[tiktok]"><?php _e( 'Please Enter TikTok URL', 'sampletheme' ); ?></label>
					</td>
				</tr>
		        <tr valign="top"><th scope="row"><?php _e( 'Pinterest', 'sampletheme' ); ?></th>
					<td>
						<input id="cOptn[pinterest]" class="large-text" type="text" name="cOptn[pinterest]" value="<?php echo esc_textarea( $options['pinterest'] ?? ''); ?>">
		                <label class="description" for="cOptn[pinterest]"><?php _e( 'Please Enter Pinterest URL', 'sampletheme' ); ?></label>
					</td>
				</tr>
		        <tr valign="top"><th scope="row"><?php _e( 'LinkedIn', 'sampletheme' ); ?></th>
					<td>
						<input id="cOptn[linkedin]" class="large-text" type="text" name="cOptn[linkedin]" value="<?php echo esc_textarea( $options['linkedin'] ?? ''); ?>">
		                <label class="description" for="cOptn[linkedin]"><?php _e( 'Please Enter LinkedIn link', 'sampletheme' ); ?></label>
					</td>
				</tr>
		        <tr valign="top"><th scope="row"><?php _e( 'Phone Number', 'sampletheme' ); ?></th>
					<td>
						<input id="cOptn[phone_number]" class="large-text" type="text" name="cOptn[phone_number]" value="<?php echo esc_textarea( $options['phone_number'] ?? ''); ?>">
		                <label class="description" for="cOptn[phone_number]"><?php _e( 'Please Enter Phone Number', 'sampletheme' ); ?></label>
					</td>
				</tr>
		        <tr valign="top"><th scope="row"><?php _e( 'Phone Number Two', 'sampletheme' ); ?></th>
					<td>
						<input id="cOptn[phone_number2]" class="large-text" type="text" name="cOptn[phone_number2]" value="<?php echo esc_textarea( $options['phone_number2'] ?? ''); ?>">
		                <label class="description" for="cOptn[phone_number2]"><?php _e( 'Please Enter Phone Number', 'sampletheme' ); ?></label>
					</td>
				</tr>
		        <tr valign="top"><th scope="row"><?php _e( 'Fax Number', 'sampletheme' ); ?></th>
					<td>
						<input id="cOptn[fax]" class="large-text" type="text" name="cOptn[fax]" value="<?php echo esc_textarea( $options['fax'] ?? ''); ?>">
		                <label class="description" for="cOptn[fax]"><?php _e( 'Please Enter Your Fax Number', 'sampletheme' ); ?></label>
					</td>
				</tr>
		        <tr valign="top"><th scope="row"><?php _e( 'Email', 'sampletheme' ); ?></th>
					<td>
						<input id="cOptn[email]" class="large-text" type="text" name="cOptn[email]" value="<?php echo esc_textarea( $options['email'] ?? ''); ?>">
		                <label class="description" for="cOptn[email]"><?php _e( 'Please Enter Your Email Address', 'sampletheme' ); ?></label>
					</td>
				</tr>
			   	<tr valign="top"><th scope="row"><?php _e( 'Support Email', 'sampletheme' ); ?></th>
					<td>
						<input id="cOptn[support_email]" class="large-text" type="text" name="cOptn[support_email]" value="<?php echo esc_textarea( $options['support_email'] ?? ''); ?>">
			            <label class="description" for="cOptn[support_email]"><?php _e( 'Please Enter Your Support Email Address', 'sampletheme' ); ?></label>
					</td>
				</tr>
		       	<tr valign="top"><th scope="row"><?php _e( 'Address', 'sampletheme' ); ?></th>
					<td>
						<input id="cOptn[address]" class="large-text" type="text" name="cOptn[address]" value="<?php echo esc_textarea( $options['address'] ?? ''); ?>">
		                <label class="description" for="cOptn[address]"><?php _e( 'Please Enter Your Address', 'sampletheme' ); ?></label>
					</td>
				</tr>
	       		<tr valign="top"><th scope="row"><?php _e( 'Timing', 'sampletheme' ); ?></th>
					<td>
						<input id="cOptn[timing]" class="large-text" type="text" name="cOptn[timing]" value="<?php echo esc_textarea( $options['timing'] ?? ''); ?>">
		                <label class="description" for="cOptn[timing]"><?php _e( 'Please Enter Timing', 'sampletheme' ); ?></label>
					</td>
				</tr>
		        <tr valign="top"><th scope="row"><?php _e( 'Footer About Text', 'sampletheme' ); ?></th>
					<td>
						<input id="cOptn[footer_about]" class="large-text" type="text" name="cOptn[footer_about]" value="<?php echo esc_textarea( $options['footer_about'] ?? ''); ?>">
		                <label class="description" for="cOptn[footer_about]"><?php _e( 'Please Enter Your Footer About', 'sampletheme' ); ?></label>
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Copyright Text', 'sampletheme' ); ?></th>
					<td>
						<textarea id="cOptn[copyright]" class="large-text" cols="50" rows="10" name="cOptn[copyright]"><?php echo esc_textarea( $options['copyright'] ?? ''); ?></textarea>
						<label class="description" for="cOptn[copyright]"><?php _e( 'Footer Copyright Text', 'sampletheme' ); ?></label>
					</td>
				</tr>
			</table>

			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e( 'Save Options', 'sampletheme' ); ?>" />
			</p>
		</form>
	</div>
<style>
div#wpfooter {
    display: none !important;
}
div#wpcontent {
    padding: 20px 50px;
}
</style>
<script>
	jQuery(document).ready(function($){
		var custom_uploader;
		$('#upload_logo_button').click(function(e) {
			e.preventDefault();
		if (custom_uploader) {
			custom_uploader.open();
			return;
		}
		
		custom_uploader = wp.media.frames.file_frame = wp.media({
			title: 'Choose Image',
			button: {
				text: 'Choose Image'
		},
			multiple: false
		});
		
		custom_uploader.on('select', function() {
			attachment = custom_uploader.state().get('selection').first().toJSON();
			$('.logourl').val(attachment.url);
			$('.logourlshow').attr('src', attachment.url);
		});
			custom_uploader.open();
		});

		var custom_uploader2;
		$('#upload_footer-logo_button').click(function(e) {
			e.preventDefault();
		if (custom_uploader2) {
			custom_uploader2.open();
			return;
		}
		
		custom_uploader2 = wp.media.frames.file_frame = wp.media({
			title: 'Choose Image',
			button: {
				text: 'Choose Image'
		},
			multiple: false
		});
		
		custom_uploader2.on('select', function() {
			attachment = custom_uploader2.state().get('selection').first().toJSON();
			$('.footer-logourl').val(attachment.url);
			$('.footer-logourlshow').attr('src', attachment.url);
		});
			custom_uploader2.open();
		});
	});
</script>

<?php }
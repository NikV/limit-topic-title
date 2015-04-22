<?php
/**
 * Plugin Name: bbPress Limit Topic Title
 */

function limit_topic_title() { ?>
	<script>
		jQuery(document).ready(function(){
			jQuery('#bbp_topic_submit').prop('disabled',true);
			jQuery('#bbp_topic_title').keyup(function(){
				jQuery('#bbp_topic_submit').prop('disabled', jQuery('#bbp_topic_title').val().length < 10 ? true : false);
			})
		});

	</script>

<?php }
add_action('wp_footer', 'limit_topic_title');
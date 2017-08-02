<?php

add_action('admin_menu', 'my_plugin_menu');
add_action( is_multisite() ? 'network_admin_menu' : 'admin_menu', 'bpgp_register_settings' );

function my_plugin_menu() {
	add_submenu_page( 'bp-general-settings', 'Buddypress Group Plus', 'Group Plus', 'manage_options', 'bp-group-plus', 'bpgp_plugin_options');
	
	//call register settings function
	add_action( 'admin_init', 'bpgp_register_settings' );
}

function bpgp_register_settings() {
	//register our settings
	register_setting( 'bpgp_plugin_options', 'group_plus_class' );
	register_setting( 'bpgp_plugin_options', 'group_plus_header' );
	register_setting( 'bpgp_plugin_options', 'group_plus_header_textfield' );
	register_setting( 'bpgp_plugin_options', 'group_plus_header_textfield_link' );
	register_setting( 'bpgp_plugin_options', 'group_plus_header_textfield_name' );
	register_setting( 'bpgp_plugin_options', 'group_plus_header_textfield2' );
	register_setting( 'bpgp_plugin_options', 'group_plus_header_textfield_link2' );
	register_setting( 'bpgp_plugin_options', 'group_plus_header_textfield_name2' );
	register_setting( 'bpgp_plugin_options', 'group_plus_tab_name' );
	register_setting( 'bpgp_plugin_options', 'group_plus_tab_slug' );
	register_setting( 'bpgp_plugin_options', 'group_plus_textfield' );
	register_setting( 'bpgp_plugin_options', 'group_plus_textfield_link' );
	register_setting( 'bpgp_plugin_options', 'group_plus_textfield_name' );
	register_setting( 'bpgp_plugin_options', 'group_plus_textfield2' );
	register_setting( 'bpgp_plugin_options', 'group_plus_textfield2_link' );
	register_setting( 'bpgp_plugin_options', 'group_plus_textfield_name2' );
	register_setting( 'bpgp_plugin_options', 'group_plus_textarea' );
	register_setting( 'bpgp_plugin_options', 'group_plus_textarea_name' );
	register_setting( 'bpgp_plugin_options', 'group_plus_textarea2' );
	register_setting( 'bpgp_plugin_options', 'group_plus_textarea_name2' );
	register_setting( 'bpgp_plugin_options', 'group_plus_map' );
	register_setting( 'bpgp_plugin_options', 'group_plus_map_name' );
	register_setting( 'bpgp_plugin_options', 'group_plus_field_display' );
	register_setting( 'bpgp_plugin_options', 'group_plus_donate' );
}

	//Set Defaults
	$default_plus_tab_name = 'Plus Tab';
	$default_plus_tab_slug = 'plus-tab';
	$default_plus_header_textfield_name = 'Text Field';
	$default_plus_header_textfield_name2 = 'Extra Field';
	$default_plus_textfield_name = 'Text Field';
	$default_plus_textfield_name2 = 'Extra Text Field';
	$default_plus_textarea_name = 'Text Area';
	$default_plus_textarea_name2 = 'Extra Text Area';
	$default_plus_map_name = 'Location';
	
		if(get_option('group_plus_tab_name') == ''){ update_option('group_plus_tab_name', $default_plus_tab_name); }
		if(get_option('group_plus_tab_slug') == ''){ update_option('group_plus_tab_slug', $default_plus_tab_slug); }
		if(get_option('group_plus_header_textfield_name') == ''){ update_option('group_plus_header_textfield_name', $default_plus_header_textfield_name); }
		if(get_option('group_plus_header_textfield_name2') == ''){ update_option('group_plus_header_textfield_name2', $default_plus_header_textfield_name2); }
		if(get_option('group_plus_textfield_name') == ''){ update_option('group_plus_textfield_name', $default_plus_textfield_name); }
		if(get_option('group_plus_textfield_name2') == ''){ update_option('group_plus_textfield_name2', $default_plus_textfield_name2); }
		if(get_option('group_plus_textarea_name') == ''){ update_option('group_plus_textarea_name', $default_plus_textarea_name); }
		if(get_option('group_plus_textarea_name2') == ''){ update_option('group_plus_textarea_name2', $default_plus_textarea_name2); }
		if(get_option('group_plus_map_name') == ''){ update_option('group_plus_map_name', $default_plus_map_name); }
		
function bpgp_plugin_options() {
	if (!current_user_can('manage_options'))  {
		wp_die( __('You do not have sufficient permissions to access this page.') );
				
	}
	
?>

			<?php if ( !empty( $_GET['settings-updated'] ) ) : ?>
				<div id="message" class="updated">
					<p><strong><?php _e('Settings saved.' ); ?></strong></p>
				</div>
			<?php endif; ?>

<div class="wrap">
<h2><?php _e('BuddyPress Group Plus Settings', 'bpgp') ?></h2>

<div id="message" class="updated">
					<p><strong><?php _e('Plugin in beta - should not be used on a production site.', 'bpgp') ?></strong></p>
				</div>

<form method="post" action="<?php echo admin_url('options.php');?>">
<?php wp_nonce_field('update-options'); ?>

<div id="wphead">
<h1 id="site-heading">Plus Group Header Info</h1>
<input type="checkbox" style="margin:9px 0 0 5px;" name="group_plus_header" value="1" <?php checked( 1, get_option('group_plus_header') ); ?> />
</div>

<?php if (function_exists('bpgp_admin_header_menu')) bpgp_admin_header_menu(); ?>

<div id="wphead">
<h1 id="site-heading">Plus Tab</h1>
<input type="checkbox" style="margin:9px 0 0 5px;" name="group_plus_class" value="1" <?php checked( 1, get_option('group_plus_class') ); ?> />
</div>

<?php if (function_exists('bpgp_admin_tab_name_slug')) bpgp_admin_tab_name_slug(); ?>
<?php if (function_exists('bpgp_admin_class_menu')) bpgp_admin_class_menu(); ?>

<input type="hidden" name="action" value="update" />
<input type="hidden" name="page_options" value="group_plus_class<?php // ?>,group_plus_header<?php // ?>,group_plus_tab_name,group_plus_tab_slug<?php // ?>,group_plus_header_textfield,group_plus_header_textfield_link,group_plus_header_textfield_name<?php // ?>,group_plus_header_textfield2,group_plus_header_textfield_link2,group_plus_header_textfield_name2<?php // ?>,group_plus_textfield,group_plus_textfield_link,group_plus_textfield_name<?php // ?>,group_plus_textfield2,group_plus_textfield2_link,group_plus_textfield_name2<?php // ?>,group_plus_textarea,group_plus_textarea_name<?php // ?>,group_plus_textarea2,group_plus_textarea_name2<?php // ?>,group_plus_map,group_plus_map_name<?php // ?>,group_plus_field_display<?php // ?>,group_plus_donate" />

<p class="submit">
<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
</p>

<?php if ( !get_option('group_plus_donate') == '1' ) { ?>
<table class="form-table">
	<tr valign="top">
		<th  style="width:370px;" scope="row">I have shown my appreciation in the form of a donation or other</th>
                <td><input type="checkbox" name="group_plus_donate" value="1" <?php checked( 1, get_option('group_plus_donate') ); ?> /></td>
		</tr>
</table>
<?php } ?>
</form>
<?php if ( !get_option('group_plus_donate') == '1' ) { ?>
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
		<input type="hidden" name="cmd" value="_s-xclick">
		<input type="hidden" name="hosted_button_id" value="QC5JXJT47UFGC">
		<input type="image" src="https://www.paypal.com/en_US/i/btn/x-click-but21.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
		<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
		</form>
        
        				<div id="message" class="updated">
					<p><strong><?php _e('I put a lot of love and hard work into building Buddypress Group Plus - To see future enhancements and the maintenance of this plugin, please show your appreciation in the form of a donation, a tweet or a blog post, thank you - Charl Kruger' ); ?></strong></p>
				</div>
                <?php } ?>
</div>
<?php
}

?>
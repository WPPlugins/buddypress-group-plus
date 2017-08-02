<?php

function bpgp_admin_tab_name_slug() {
// main options
	?>
    <p><b>Group Tab Settings</b> - Please note the tab slug <b>must not</b> contain spaces, use a hyphen instead.</p>
<table class="form-table">
	<tr valign="top">
		<th scope="row">Custom group tab name</th>
                <td><input style="overflow:auto;" name="group_plus_tab_name" value="<?php echo get_option('group_plus_tab_name') ?>"/></td>
		</tr>
</table>
<table class="form-table">
	<tr valign="top">
		<th scope="row">Custom group tab slug</th>
                <td><input style="overflow:auto;" name="group_plus_tab_slug" value="<?php echo get_option('group_plus_tab_slug') ?>"/></td>
		</tr>
</table>
	<?php
                }
// the text field admin options
function bpgp_admin_class_menu() {
	?>
<table class="form-table">
	<tr valign="top">
		<th scope="row"><b>Enable Group Plus Text Field</b></th>
    		<td><input type="checkbox" name="group_plus_textfield" value="1" <?php checked( 1, get_option('group_plus_textfield') ); ?> /></td>
		</tr>
</table>
    <?php
	if ( get_option('group_plus_textfield') == '1' ) {
		?>
<table class="form-table">
	<tr valign="top">
		<th scope="row">Enable Group Plus Text Field Link</th>
    		<td><input type="checkbox" name="group_plus_textfield_link" value="1" <?php checked( 1, get_option('group_plus_textfield_link') ); ?> /></td>
		</tr>
</table>
<table class="form-table">
	<tr valign="top">
		<th scope="row">Text Field field name</th>
            <td><input style="overflow:auto;" name="group_plus_textfield_name" value="<?php echo get_option('group_plus_textfield_name') ?>"/></td>
		</tr>
</table>
<?php
	} else { //disbale it
		?>
<table class="form-table">
	<tr valign="top">
		<th scope="row" style="color:#888; text-decoration:line-through;">Enable Group Plus Text Field Link</th>
    		<td><input disabled="disabled" type="checkbox" name="group_plus_textfield_link" value="1" <?php checked( 1, get_option('group_plus_textfield_link') ); ?> /></td>
		</tr>
</table>
<table class="form-table">
	<tr valign="top">
		<th scope="row" style="color:#888; text-decoration:line-through;">Text Field field name</th>
            <td><input disabled="disabled" style="overflow:auto;" name="group_plus_textfield_name" value="<?php echo get_option('group_plus_textfield_name') ?>"/></td>
		</tr>
</table>
<?php
	} 	
// the second text field admin options
	?>
<table class="form-table">
	<tr valign="top">
		<th scope="row"><b>Enable Group Plus Extra Text Field</b></th>
    		<td><input type="checkbox" name="group_plus_textfield2" value="1" <?php checked( 1, get_option('group_plus_textfield2') ); ?> /></td>
		</tr>
</table>
    <?php
	if ( get_option('group_plus_textfield2') == '1' ) {
		?>
<table class="form-table">
	<tr valign="top">
		<th scope="row">Is this text field a link?</th>
    		<td><input type="checkbox" name="group_plus_textfield2_link" value="1" <?php checked( 1, get_option('group_plus_textfield2_link') ); ?> /></td>
		</tr>
</table>
<table class="form-table">
	<tr valign="top">
		<th scope="row">Extra Text Field field name</th>
            <td><input style="overflow:auto;" name="group_plus_textfield_name2" value="<?php echo get_option('group_plus_textfield_name2') ?>"/></td>
		</tr>
</table>
<?php
	} else { //disbale it
		?>
<table class="form-table">
	<tr valign="top">
		<th scope="row" style="color:#888; text-decoration:line-through;">Is this text field a link?</th>
    		<td><input disabled="disabled" type="checkbox" name="group_plus_textfield2_link" value="1" <?php checked( 1, get_option('group_plus_textfield2_link') ); ?> /></td>
		</tr>
</table>
<table class="form-table">
	<tr valign="top">
		<th scope="row" style="color:#888; text-decoration:line-through;">Extra Text Field field name</th>
            <td><input disabled="disabled" style="overflow:auto;" name="group_plus_textfield_name2" value="<?php echo get_option('group_plus_textfield_name2') ?>"/></td>
		</tr>
</table>
<?php
	}
// the text area admin options  
?>  
<table class="form-table">
	<tr valign="top">
		<th scope="row"><b>Enable Group Plus Text Area</b></th>
    		<td><input type="checkbox" name="group_plus_textarea" value="1" <?php checked( 1, get_option('group_plus_textarea') ); ?> /></td>
		</tr>
</table>
    <?php
	if ( get_option('group_plus_textarea') == '1' ) {
		?>
<table class="form-table">
	<tr valign="top">
		<th scope="row">Text Area field name</th>
            <td><input style="overflow:auto;" name="group_plus_textarea_name" value="<?php echo get_option('group_plus_textarea_name') ?>"/></td>
		</tr>
</table>
<?php
	} else { //disbale it
		?>
<table class="form-table">
	<tr valign="top">
		<th scope="row" style="color:#888; text-decoration:line-through;">Text Area field name</th>
            <td><input disabled="disabled" style="overflow:auto;" name="group_plus_textarea_name" value="<?php echo get_option('group_plus_textarea_name') ?>"/></td>
		</tr>
</table>
<?php
	}
// the second text area admin options  
?>  
<table class="form-table">
	<tr valign="top">
		<th scope="row"><b>Enable Group Plus Extra Text Area</b></th>
    		<td><input type="checkbox" name="group_plus_textarea2" value="1" <?php checked( 1, get_option('group_plus_textarea2') ); ?> /></td>
		</tr>
</table>
    <?php
	if ( get_option('group_plus_textarea2') == '1' ) {
		?>
<table class="form-table">
	<tr valign="top">
		<th scope="row">Extra Text Area field name</th>
            <td><input style="overflow:auto;" name="group_plus_textarea_name2" value="<?php echo get_option('group_plus_textarea_name2') ?>"/></td>
		</tr>
</table>
<?php
	} else { //disbale it
		?>
<table class="form-table">
	<tr valign="top">
		<th scope="row" style="color:#888; text-decoration:line-through;">Extra Text Area field name</th>
            <td><input disabled="disabled" style="overflow:auto;" name="group_plus_textarea_name2" value="<?php echo get_option('group_plus_textarea_name2') ?>"/></td>
		</tr>
</table>
<?php
	}
// main options
	?>
    <p><b>Group Tab Settings</b> - Please note the tab slug <b>must not</b> contain spaces, use a hyphen instead.</p>
<table class="form-table">
	<tr valign="top">
		<th scope="row">How to display</th>
                <td><input type="checkbox" name="group_plus_field_display" value="1" <?php checked( 1, get_option('group_plus_field_display') ); ?> /></td>
		</tr>
</table>
	<?php
// the map admin options  
?>    
<table class="form-table">
	<tr valign="top">
		<th scope="row"><b>Enable Group Maps</b></th>
    		<td><input type="checkbox" name="group_plus_map" value="1" <?php checked( 1, get_option('group_plus_map') ); ?> /></td>
		</tr>
</table>
    <?php
	if ( get_option('group_plus_map') == '1' ) {
		?>
<table class="form-table">
	<tr valign="top">
		<th scope="row">Location field name</th>
            <td><input style="overflow:auto;" name="group_plus_map_name" value="<?php echo get_option('group_plus_map_name') ?>"/></td>
		</tr>
</table>
<?php
	} else { //disbale it
		?>
<table class="form-table">
	<tr valign="top">
		<th scope="row" style="color:#888; text-decoration:line-through;">Location field name</th>
            <td><input disabled="disabled" style="overflow:auto;" name="group_plus_map_name" value="<?php echo get_option('group_plus_map_name') ?>"/></td>
		</tr>
</table>
<?php
	}
}

?>
<?php 

function mfp_options_page() {
    global $mfp_options;
	ob_start(); ?>
<div class="wrap">
    <h2>My First WordPress Plugin Options</h2>
    <p>This is our settings page content.</p>

    <form method="POST" action="options.php">
        <?php settings_fields('mfp_settings_group'); ?>
        <h4><?php _e('Twitter Information', 'mfp_domain'); ?></h4>

        <p>
            <input id="mfp_settings[enable]" type="checkbox" name="mfp_settings[enable]" value="1" checked="checked" />
            <label class="description"
                for="mfp_settings[enable]"><?php _e('Display the Follow Me on Twitter link', 'mfp_domain'); ?></label>
        </p>
        <p>
            <label class="description"
                for="mfp_settings[twitter_url]"><?php _e('Enter your Twitter URL', 'mfp_domain'); ?></label>
            <input id="mfp_settings[twitter_url]" name="mfp_settings[twitter_url]" type="text"
                value="<?php echo $mfp_options['twitter_url']; ?>" />
        </p>

        <p>
            <?php $styles = array('blue', 'red'); ?>
            <select id="mfp_settings[theme]" name="mfp_settings[theme]">
                <?php foreach($styles as $style) { ?>
                <?php if($mfp_options['theme'] == $style) { $selected = 'selected="selected"'; } else { $selected = ''; } ?>
                <option selected="selected" value="&lt;?php echo $style; ?>"><?php echo $style; ?></option>
                <?php } ?>
            </select>
        </p>
        <p class="submit">
            <input type="submit" class="button-primary" value="<?php _e('Save Options', 'mfp_domain'); ?>" />
        </p>
    </form>
</div>
<?php
	echo ob_get_clean();
}

function mfp_add_options_link() {
	add_options_page('My First WordPress Plugin Options', 'My First Plugin', 'manage_options', 'mfp-options', 'mfp_options_page');
}
add_action('admin_menu', 'mfp_add_options_link');

function mfp_register_settings() {
	// creates our settings in the options table
	register_setting('mfp_settings_group', 'mfp_settings');
}
add_action('admin_init', 'mfp_register_settings');
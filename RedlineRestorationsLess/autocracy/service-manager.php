<?php
/* Creates the Theme Options Page */

function service_theme_options_do_page() {
    wp_enqueue_script('media-upload');
    wp_enqueue_script('thickbox');
    wp_enqueue_script('jquery');
    wp_enqueue_style('thickbox');
    wp_enqueue_script('my-theme-options', get_template_directory_uri() . '/js/theme-options.js', false, null);
    ?>
    <div class="wrap">
        <?php
        screen_icon();
        echo "<h2>" . get_current_theme() . __(' Theme Manager', 'sampletheme') . "</h2>";
        ?>
        <?php if (false !== $_REQUEST['settings-updated']) : ?>
        <div class="updated fade"><p><strong><?php _e('Options saved', 'sampletheme'); ?></strong></p></div>
    <?php endif; ?>

    <form method="post" action="options.php">
        <?php settings_fields('service_options'); ?>
        <?php $serviceoptions = get_option('service_theme_options'); ?>
        <table class="form-table">
            <th><h3>Services Links</h3></th>
            <tr valign="top">
                <td><img style="margin-top:-15px; padding-right:10px;" src="<?php echo get_template_directory_uri(); ?>/images/service-icons/branding-icon.png">Branding Link:</td>
                <td>
                    <input type="text" size="36" name="service_theme_options[brandinglink]" value="<?php esc_attr_e($serviceoptions['brandinglink']); ?>" />
                </td>
            </tr>
            <tr valign="top">
                <td><img style="margin-top:-15px; padding-right:10px;" src="<?php echo get_template_directory_uri(); ?>/images/service-icons/technology-icon.png">Web Development Link:</td>
                <td>
                    <input type="text" size="36" name="service_theme_options[webdevlink]" value="<?php esc_attr_e($serviceoptions['webdevlink']); ?>" />
                </td>
            </tr>
            <tr valign="top">
                <td><img style="margin-top:-15px; padding-right:10px;" src="<?php echo get_template_directory_uri(); ?>/images/service-icons/marketing-icon.png">Marketing Link:</td>
                <td>
                    <input type="text" size="36" name="service_theme_options[marketinglink]" value="<?php esc_attr_e($serviceoptions['marketinglink']); ?>" />
                </td>
            </tr>
            <tr valign="top">
                <td><img style="margin-top:-15px; padding-right:10px;" src="<?php echo get_template_directory_uri(); ?>/images/service-icons/bd-icon.png">Bus. Development Link:</td>
                <td>
                    <input type="text" size="36" name="service_theme_options[bdlink]" value="<?php esc_attr_e($serviceoptions['bdlink']); ?>" />
                </td>
            </tr>
            <tr valign="top">
                <td><img style="margin-top:-15px; padding-right:10px;" src="<?php echo get_template_directory_uri(); ?>/images/service-icons/randp-red.png">R & D Link:</td>
                <td>
                    <input type="text" size="36" name="service_theme_options[randplink]" value="<?php esc_attr_e($serviceoptions['randplink']); ?>" />
                </td>
            </tr>
        </table>
        <p class="submit">
            <input type="submit" class="button-primary" value="<?php _e('Save Options', 'sampletheme'); ?>" />
        </p>
    </form>

</div>
<?php
}

function service_theme_options_validate($input) {
    global $select_options, $radio_options;
    // Our checkbox value is either 0 or 1
    if (!isset($input['option1']))
        $input['option1'] = null;
    $input['option1'] = ( $input['option1'] == 1 ? 1 : 0 );
    // Say our text option must be safe text with no HTML tags
    $input['sometext'] = wp_filter_nohtml_kses($input['sometext']);
    // Our select option must actually be in our array of select options
    // Say our textarea option must be safe text with the allowed tags for posts
    $input['sometextarea'] = wp_filter_post_kses($input['sometextarea']);
    return $input;
}
?>
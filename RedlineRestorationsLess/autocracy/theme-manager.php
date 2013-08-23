<?php
/* Creates the Theme Options Page */

function main_theme_options_do_page() {
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
            <?php settings_fields('main_options'); ?>
            <?php $mainoptions = get_option('main_theme_options'); ?>
            <table class="form-table">
                <th><h3>Sharing Options</h3></th>
                <tr valign="top">
                    <td>Youtube URL</td>
                    <td>
                        <input type="text" size="36" name="main_theme_options[youtubeurl]" value="<?php esc_attr_e($mainoptions['youtubeurl']); ?>" />
                    </td>
                </tr>
                <tr valign="top">
                    <td>Facebook URL</td>
                    <td>
                        <input type="text" size="36" name="main_theme_options[facebookurl]" value="<?php esc_attr_e($mainoptions['facebookurl']); ?>" />
                    </td>
                </tr>
                <tr valign="top">
                    <td>Twitter URL</td>
                    <td>
                        <input type="text" size="36" name="main_theme_options[twitterurl]" value="<?php esc_attr_e($mainoptions['twitterurl']); ?>" />
                    </td>
                </tr>
                <tr valign="top">
                    <td>Pinterest URL</td>
                    <td>
                        <input type="text" size="36" name="main_theme_options[pinteresturl]" value="<?php esc_attr_e($mainoptions['pinteresturl']); ?>" />
                    </td>
                </tr>
                 <tr valign="top">
                    <td>Google Plus URL</td>
                    <td>
                        <input type="text" size="36" name="main_theme_options[gglplusurl]" value="<?php esc_attr_e($mainoptions['gglplusurl']); ?>" />
                    </td>
                </tr>
                <th><h3>Footer Options</h3></th>
                <tr valign="top">
                    <td>
                        Copyright Text
                        <textarea id="main_theme_options[copyrighttxt]" class="large-text" style="height:130px; width:375px;" name="main_theme_options[copyrighttxt]"><?php echo esc_textarea($mainoptions['copyrighttxt']); ?></textarea>
                    </td>
                </tr>
                <tr valign="top">
                    <td>
                        Address Info
                        <textarea id="main_theme_options[addresstext]" class="large-text" style="height:130px; width:375px;" name="main_theme_options[addresstext]"><?php echo esc_textarea($mainoptions['addresstext']); ?></textarea>
                    </td>
                </tr>
                <th><h3>Contact Options</h3></th>
                <tr valign="top">
                    <td>Hours</td>
                    <td>
                        <input type="text" size="36" name="main_theme_options[hours]" value="<?php esc_attr_e($mainoptions['hours']); ?>" />
                    </td>
                </tr>
                <tr valign="top">
                    <td>Telephone Number</td>
                    <td>
                        <input type="text" size="36" name="main_theme_options[telnumber]" value="<?php esc_attr_e($mainoptions['telnumber']); ?>" />
                    </td>
                </tr>
                <tr valign="top">
                    <td>Fax Number</td>
                    <td>
                        <input type="text" size="36" name="main_theme_options[faxnumber]" value="<?php esc_attr_e($mainoptions['faxnumber']); ?>" />
                    </td>
                </tr>
                <tr valign="top">
                    <td>Email Address</td>
                    <td>
                        <input type="text" size="36" name="main_theme_options[emailaddress]" value="<?php esc_attr_e($mainoptions['emailaddress']); ?>" />
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

function main_theme_options_validate($input) {
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
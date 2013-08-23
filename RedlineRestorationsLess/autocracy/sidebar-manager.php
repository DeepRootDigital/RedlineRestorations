<?php
/* Creates the Theme Options Page */

function sidebar_theme_options_do_page() {
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
        <?php settings_fields('sidebar_options'); ?>
        <?php $sidebaroptions = get_option('sidebar_theme_options'); ?>
        <table class="form-table">
            <th><h3>Pane 1</h3></th>
            <tr valign="top">
                <td>Pane Title</td>
                <td>
                    <input type="text" size="36" name="sidebar_theme_options[pane1title]" value="<?php esc_attr_e($sidebaroptions['pane1title']); ?>" />
                </td>
            </tr>
            <tr valign="top">
                <td>Pane Text</td>
                <td>
                     <textarea id="sidebar_theme_options[pane1text]" class="large-text" style="height:130px; width:375px;" name="sidebar_theme_options[pane1text]"><?php echo esc_textarea($sidebaroptions['pane1text']); ?></textarea>
                </td>
            </tr>
            <tr valign="top">
                <td>Pane Link</td>
                <td>
                    <input type="text" size="36" name="sidebar_theme_options[pane1link]" value="<?php esc_attr_e($sidebaroptions['pane1link']); ?>" />
                </td>
            </tr>
            <th><h3>Pane 2</h3></th>
            <tr valign="top">
                <td>Pane Title</td>
                <td>
                    <input type="text" size="36" name="sidebar_theme_options[pane2title]" value="<?php esc_attr_e($sidebaroptions['pane2title']); ?>" />
                </td>
            </tr>
            <tr valign="top">
                <td>Pane Text</td>
                <td>
                     <textarea id="sidebar_theme_options[pane2text]" class="large-text" style="height:230px; width:375px;" name="sidebar_theme_options[pane2text]"><?php echo esc_textarea($sidebaroptions['pane2text']); ?></textarea>
                </td>
            </tr>
            <tr valign="top">
                <td>Pane Link</td>
                <td>
                    <input type="text" size="36" name="sidebar_theme_options[pane2link]" value="<?php esc_attr_e($sidebaroptions['pane2link']); ?>" />
                </td>
            </tr>
            <th><h3>Pane 3</h3></th>
            <tr valign="top">
                <td>Pane Title</td>
                <td>
                    <input type="text" size="36" name="sidebar_theme_options[pane3title]" value="<?php esc_attr_e($sidebaroptions['pane3title']); ?>" />
                </td>
            </tr>
            <tr valign="top">
                <td>Pane Text</td>
                <td>
                     <textarea id="sidebar_theme_options[pane3text]" class="large-text" style="height:230px; width:375px;" name="sidebar_theme_options[pane3text]"><?php echo esc_textarea($sidebaroptions['pane3text']); ?></textarea>
                </td>
            </tr>
            <tr valign="top">
                <td>Pane Link</td>
                <td>
                    <input type="text" size="36" name="sidebar_theme_options[pane3link]" value="<?php esc_attr_e($sidebaroptions['pane3link']); ?>" />
                </td>
            </tr>
            <th><h3>Pane 4</h3></th>
            <tr valign="top">
                <td>Pane Title</td>
                <td>
                    <input type="text" size="36" name="sidebar_theme_options[pane4title]" value="<?php esc_attr_e($sidebaroptions['pane4title']); ?>" />
                </td>
            </tr>
            <tr valign="top">
                <td>Pane Text</td>
                <td>
                     <textarea id="sidebar_theme_options[pane4text]" class="large-text" style="height:230px; width:375px;" name="sidebar_theme_options[pane4text]"><?php echo esc_textarea($sidebaroptions['pane4text']); ?></textarea>
                </td>
            </tr>
            <tr valign="top">
                <td>Pane Link</td>
                <td>
                    <input type="text" size="36" name="sidebar_theme_options[pane4link]" value="<?php esc_attr_e($sidebaroptions['pane4link']); ?>" />
                </td>
            </tr>
            <th><h3>Pane 5</h3></th>
            <tr valign="top">
                <td>Pane Title</td>
                <td>
                    <input type="text" size="36" name="sidebar_theme_options[pane5title]" value="<?php esc_attr_e($sidebaroptions['pane5title']); ?>" />
                </td>
            </tr>
            <tr valign="top">
                <td>Pane Text</td>
                <td>
                     <textarea id="sidebar_theme_options[pane5text]" class="large-text" style="height:230px; width:375px;" name="sidebar_theme_options[pane5text]"><?php echo esc_textarea($sidebaroptions['pane5text']); ?></textarea>
                </td>
            </tr>
            <tr valign="top">
                <td>Pane Link</td>
                <td>
                    <input type="text" size="36" name="sidebar_theme_options[pane5link]" value="<?php esc_attr_e($sidebaroptions['pane5link']); ?>" />
                </td>
            </tr>
            <th><h3>Pane 6</h3></th>
            <tr valign="top">
                <td>Pane Title</td>
                <td>
                    <input type="text" size="36" name="sidebar_theme_options[pane6title]" value="<?php esc_attr_e($sidebaroptions['pane6title']); ?>" />
                </td>
            </tr>
            <tr valign="top">
                <td>Pane Text</td>
                <td>
                     <textarea id="sidebar_theme_options[pane6text]" class="large-text" style="height:230px; width:375px;" name="sidebar_theme_options[pane6text]"><?php echo esc_textarea($sidebaroptions['pane6text']); ?></textarea>
                </td>
            </tr>
            <tr valign="top">
                <td>Pane Link</td>
                <td>
                    <input type="text" size="36" name="sidebar_theme_options[pane6link]" value="<?php esc_attr_e($sidebaroptions['pane6link']); ?>" />
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

function sidebar_theme_options_validate($input) {
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
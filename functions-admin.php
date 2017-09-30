<?php
/**
 * Admin
 *
 */

add_action('admin_menu', 'tw_settings');
add_action('admin_init', 'tw_settings_data');

function tw_settings() {
    add_menu_page('Tackle World settings', 'Tackle World', 'administrator', 'tackle-world', 'tw_settings_page', 'dashicons-admin-generic', 21);
}

function tw_settings_data() {
    register_setting('tw_settings_group', 'cat_enable');
    register_setting('tw_settings_group', 'cat_url');
}

function tw_settings_page()
{
    // admin
    ?>
    <style>
        .tw-admin input[type=text] {
            width: 100%;
            max-width: 320px;
        }
        .tw-admin textarea {
            width: 100%;
            max-width: 320px;
            height: 12em;
        }
    </style>
    <div class="tw-admin wrap">
        <h2>Tackle World settings</h2>

        <form method="post" action="options.php" novalidate="novalidate">
            <?php settings_fields( 'tw_settings_group' ); ?>
            <?php do_settings_sections( 'tw_settings_group' ); ?>
            <table class="form-table">
                <h3>Catalogue download</h3>
                <tr valign="top">
                    <th scope="row"><label for="cat_enable">Enable catalogue download button</label></th>
                    <td>
                        <select name="cat_enable" id="cat_enable">
                            <option value="disabled" <?php if ( get_option('cat_enable') == 'disabled' ) echo 'selected="selected"'; ?>>Disabled</option>
                            <option value="enabled" <?php if ( get_option('cat_enable') == 'enabled' ) echo 'selected="selected"'; ?>>Enabled</option>
                        </select>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row"><label for="cat_url">Catalogue download link</label></th>
                    <td><input type="text" name="cat_url" value="<?php echo esc_attr( get_option('cat_url') ); ?>" /></td>
                </tr>
            </table>
            <?php submit_button(); ?>
        </form>

    </div>
    <?php
}
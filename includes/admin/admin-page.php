<div class="wrap">
    <h1><?php esc_html_e('WP Voltsec.io Admin Page', 'wp-voltsec-io'); ?></h1>

    <form method="post" action="">
        <?php wp_nonce_field('wp_voltsec_io_admin_nonce', 'wp_voltsec_io_nonce'); ?>
        
        <h2><?php esc_html_e('Plugin Settings', 'wp-voltsec-io'); ?></h2>
        
        <table class="form-table">
            <tr>
                <th scope="row"><?php esc_html_e('Enable Two-Factor Authentication', 'wp-voltsec-io'); ?></th>
                <td>
                    <label for="enable_2fa">
                        <input type="checkbox" name="enable_2fa" id="enable_2fa" value="1" <?php checked(get_option('enable_2fa'), 1); ?>>
                        <?php esc_html_e('Enable 2FA for admin users.', 'wp-voltsec-io'); ?>
                    </label>
                </td>
            </tr>
        </table>
        
        <?php submit_button(); ?>
    </form>
</div>

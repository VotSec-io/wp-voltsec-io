<div class="wrap">
    <h1><?php esc_html_e('WP Voltsec.io Settings', 'wp-voltsec-io'); ?></h1>

    <form method="post" action="options.php">
        <?php settings_fields('wp_voltsec_io_settings'); ?>
        <?php do_settings_sections('wp_voltsec_io_settings'); ?>
        
        <table class="form-table">
            <tr>
                <th scope="row"><?php esc_html_e('API Key', 'wp-voltsec-io'); ?></th>
                <td>
                    <input type="text" name="wp_voltsec_io_api_key" value="<?php echo esc_attr(get_option('wp_voltsec_io_api_key')); ?>">
                </td>
            </tr>
        </table>
        
        <?php submit_button(); ?>
    </form>
</div>

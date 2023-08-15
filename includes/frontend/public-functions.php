<?php
// Prevent direct access to this file
if (!defined('ABSPATH')) {
    exit;
}

// Example public function to display a secure message
function wp_voltsec_io_display_secure_message() {
    echo '<div class="secure-message">';
    echo '<p>' . esc_html__('This page is protected by WP Voltsec.io', 'wp-voltsec-io') . '</p>';
    echo '</div>';
}

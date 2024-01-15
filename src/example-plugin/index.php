<?php

/**
 * Plugin Name: Example Plugin
 */

add_action('wp_footer', 'add_footer');
function add_footer() {
    echo '<p>Hello, world!</p>';
}

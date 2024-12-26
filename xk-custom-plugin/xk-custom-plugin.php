<?php
/*
Plugin Name: XK Custom Plugin
Plugin URI: https://example.com
Description: This is just a custom plugin developed by xk
Version: 1.0
Author: XK
Author URI: https://yourwebsite.com
License: GPL2
*/

function my_custom_footer_message() {
    echo '<p>Qafco custom plugin</p>';
}
add_action('wp_footer', 'my_custom_footer_message');


?>
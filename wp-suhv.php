<?php
/*
Plugin Name: WP-SUHV Plugin
Plugin URI: https://github.com/WP-SUHV/WP-SUHV-Plugin
Description: Connects to the V2 API of swissunihockey.ch and serves data.
Author: Philipp Meier and Claudio Schwarz
Author URI: https://github.com/WP-SUHV/
*/

add_action('admin_menu', 'setup_wp_suhv_admin_menus');

function setup_wp_suhv_admin_menus() {
  add_submenu_page( 'options-general.php', 'WP-SUHV Plugin', 'WP-SUHV Plugin', 'manage_options', 'wp-suhv-plugin-settings', 'wp_suhv_plugin_page_settings' );
}

function wp_suhv_plugin_page_settings() {
    /*
     * @todo settings page
     * @todo first step: fill in the API and secret key
     * @todo second step: choose club from a dropdown and choose custom CSS or not (don't show the input field with the api and secret key again)
     *
     * Mockups: https://www.weld.io/wp-suhv-settings-page
    */
    echo 'Hello World';
}
<?php
/**
 * Plugin Name:       Affiliate Rel Manager
 * Plugin URI:        https://profiles.wordpress.org/monzuralam
 * Description:       Best Affiliate Link Rel Manager for WordPress. Easily rel change nofollow to nofollow sponsored.
 * Version:           1.0.0
 * Author:            Monzur Alam
 * Author URI:        https://profiles.wordpress.org/monzuralam
 * Text Domain:       affiliate-rel-manager
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * GitHub Plugin URI: https://github.com/affiliate-rel-manager
 */

// If this file is called directly, abort.
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

define('ARM_PATH',plugin_dir_path(__FILE__));

/**
 * enqueue script
 */
if (!function_exists('affiliate_rel_manager_scripts')) {
    function affiliate_rel_manager_scripts(){
        wp_register_script('affiliate-rel-manager-scripts', plugins_url('assets/js/affiliate-script.js', __FILE__), array('jquery'), time(),  true);
        wp_enqueue_script( 'jquery' );
        wp_enqueue_script('affiliate-rel-manager-scripts');
    }
}
add_action('wp_enqueue_scripts', 'affiliate_rel_manager_scripts');

/**
 * enqueue admin style
 */
if (!function_exists('affiliate_rel_manager_admin_style')) {
    function affiliate_rel_manager_admin_style(){
        wp_register_style('affiliate-rel-manager-style', plugins_url('assets/css/affiliate-style.css', __FILE__), false, time(), 'all');
        wp_enqueue_style('affiliate-rel-manager-style');
    }
}
add_action('admin_enqueue_scripts', 'affiliate_rel_manager_admin_style');
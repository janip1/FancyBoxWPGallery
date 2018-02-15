<?php
/*
Plugin Name: Fancybox Gallery
Description:  Display Wordpress gallery with fancybox.
Version:      1.0.0
Author:       Jani Poklar
Author URI:   https://github.com/janip1
License:      GPLv2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
*/

ini_set('display_errors','On');
date_default_timezone_set("Europe/London");
error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_NOTICE);

function gallery_scripts() {
    wp_deregister_script('jquery');
    wp_register_script( 'jquery', 'js/jquery.min.js', array(), null, false);
    wp_register_script('fancybox', 'js/jquery.fancybox.min.js');

    wp_register_style('fancybox', 'css/jquery.fancybox.min.css');
    wp_enqueue_script('jquery');
}
add_action( 'init', 'gallery_scripts' );
?>

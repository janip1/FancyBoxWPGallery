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

function gallery_scripts() {
    wp_deregister_script('jquery');
    wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.2.1.min.js', array(), null, false);
    wp_enqueue_script('jquery');

    wp_register_script('fancybox', plugins_url('/js/jquery.fancybox.min.js', __FILE__) );
    wp_register_style('fancybox', plugins_url('/css/jquery.fancybox.min.css', __FILE__) );
    wp_enqueue_script('fancybox');

    wp_register_script('image', plugins_url('/js/image.js', __FILE__) );
    wp_enqueue_script('image');
    wp_enqueue_style('fancybox');
}
add_action( 'init', 'gallery_scripts' );
?>

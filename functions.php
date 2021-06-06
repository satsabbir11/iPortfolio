<?php

function iportfolio_assets(){
    /**
    * Favicons
     */

wp_enqueue_style('icon',get_theme_file_uri('/assets/img/favicon.png'));
wp_enqueue_style('apple-touch-icon',get_theme_file_uri('/assets/img/apple-touch-icon.png'));

/**
 * Google Fonts
 */

wp_enqueue_style('//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i');

/**
 * Vendor CSS Files
 */

wp_enqueue_style('aos',get_theme_file_uri('/assets/vendor/aos/aos.css'));
wp_enqueue_style('bootstrap',get_theme_file_uri('/assets/vendor/bootstrap/css/bootstrap.min.css'));
wp_enqueue_style('bootstrap-icon',get_stylesheet_uri('/assets/vendor/bootstrap-icons/bootstrap-icons.css'));

wp_enqueue_script('boxicons',get_theme_file_uri('/assets/vendor/boxicons/css/boxicons.min.css'));
wp_enqueue_script('glightbox',get_theme_file_uri('/assets/vendor/glightbox/css/glightbox.min.css'));
wp_enqueue_script('swiper-bundle',get_theme_file_uri('/assets/vendor/swiper/swiper-bundle.min.css'));

/**
 *  Template Main CSS File
 */

wp_enqueue_script('main-style',get_theme_file_uri('/assets/css/style.css'));


/**
 * Vendor JS Files
 */

wp_enqueue_script('aos',get_theme_file_uri('/assets/vendor/aos/aos.js'));
wp_enqueue_script('bootstrap',get_theme_file_uri('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js'));
wp_enqueue_script('glightbox',get_theme_file_uri('/assets/vendor/glightbox/js/glightbox.min.js'));
wp_enqueue_script('isotope-layout',get_theme_file_uri('/assets/vendor/isotope-layout/isotope.pkgd.min.js'));
wp_enqueue_script('php-email-form',get_theme_file_uri('/assets/vendor/php-email-form/validate.js'));
wp_enqueue_script('pure-counter',get_theme_file_uri('/assets/vendor/purecounter/purecounter.js'));
wp_enqueue_script('swiper',get_theme_file_uri('/assets/vendor/swiper/swiper-bundle.min.js'));
wp_enqueue_script('typed-js',get_theme_file_uri('/assets/vendor/typed.js/typed.min.js'));
wp_enqueue_script('waypoints',get_theme_file_uri('/assets/vendor/waypoints/noframework.waypoints.js'));

/**
 * Template Main JS File
 */

wp_enqueue_script('main-js',get_theme_file_uri('/assets/js/main.js'));

}
add_action('wp_enqueue_scripts','iportfolio_assets');

?>
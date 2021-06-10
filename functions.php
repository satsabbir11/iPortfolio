<?php


require_once get_theme_file_path('/inc/tgm.php');
function iportfolio_theme_setup()
{
    load_theme_textdomain("iportfolio");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
    add_theme_support('html5', array('search-form','comment-list'));
    add_theme_support("post-formats", array("image","gallery","quote","audio","video","link"));

    register_nav_menu("sidemenu",__("Side Menu","iportfolio"));
}
add_action("after_setup_theme","iportfolio_theme_setup");

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
wp_enqueue_style('bootstrap-icon',get_theme_file_uri('/assets/vendor/bootstrap-icons/bootstrap-icons.css'));

wp_enqueue_style('boxicons',get_theme_file_uri('/assets/vendor/boxicons/css/boxicons.min.css'));
wp_enqueue_style('glightbox',get_theme_file_uri('/assets/vendor/glightbox/css/glightbox.min.css'));
wp_enqueue_style('swiper-bundle',get_theme_file_uri('/assets/vendor/swiper/swiper-bundle.min.css'));

/**
 *  Template Main CSS File
 */

wp_enqueue_style('main-style',get_theme_file_uri('/assets/css/style.css'));


/**
 * Vendor JS Files
 */

wp_enqueue_script('aos',get_theme_file_uri('/assets/vendor/aos/aos.js'),null, "1.0", true);
wp_enqueue_script('bootstrap',get_theme_file_uri('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js'),null, "1.0", true);
wp_enqueue_script('glightbox',get_theme_file_uri('/assets/vendor/glightbox/js/glightbox.min.js'),null, "1.0", true);
wp_enqueue_script('isotope-layout',get_theme_file_uri('/assets/vendor/isotope-layout/isotope.pkgd.min.js'),null, "1.0", true);
wp_enqueue_script('php-email-form',get_theme_file_uri('/assets/vendor/php-email-form/validate.js'),null, "1.0", true);
wp_enqueue_script('pure-counter',get_theme_file_uri('/assets/vendor/purecounter/purecounter.js'),null, "1.0", true);
wp_enqueue_script('swiper',get_theme_file_uri('/assets/vendor/swiper/swiper-bundle.min.js'),null, "1.0", true);
wp_enqueue_script('typed-js',get_theme_file_uri('/assets/vendor/typed.js/typed.min.js'),null, "1.0", true);
wp_enqueue_script('waypoints',get_theme_file_uri('/assets/vendor/waypoints/noframework.waypoints.js'),null, "1.0", true);

/**
 * Template Main JS File
 */

wp_enqueue_script('main-js',get_theme_file_uri('/assets/js/main.js'),null, "1.0", true);

}
add_action('wp_enqueue_scripts','iportfolio_assets');

?>
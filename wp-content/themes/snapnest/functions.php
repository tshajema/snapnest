<?php

/**
 * Enqueue scripts and styles.
 */
function snapnest_scripts()
{   
    // css
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css', array(), '1.1', 'all' );
    wp_enqueue_style( 'icomoon', get_template_directory_uri() . '/css/icomoon.css', array(), '1.1', 'all' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '1.1', 'all' );
    wp_enqueue_style( 'flexslider', get_template_directory_uri() . '/css/flexslider.css', array(), '1.1', 'all' );
    wp_enqueue_style( 'owl', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), '1.1', 'all' );
    wp_enqueue_style( 'owltheme', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), '1.1', 'all' );
    wp_enqueue_style( 'slider', get_template_directory_uri() . '/css/slider.css', array(), '1.1', 'all' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array(), '1.1', 'all' );
    
    // js
    // Front page
    wp_enqueue_script( 'jq', get_template_directory_uri() . '/js/vendor/jquery-1.11.2.min.js');
    wp_enqueue_script( 'plugins', get_template_directory_uri() . '/js/plugins.js');
    wp_enqueue_script( 'slides', get_template_directory_uri() . '/js/slides.js');

    //Others
    wp_enqueue_script( 'md', get_template_directory_uri() . '/js/modernizr-2.6.2.min.js');
    wp_enqueue_script( 'jqmin', get_template_directory_uri() . '/js/jquery.min.js');
    wp_enqueue_script( 'jeasing', get_template_directory_uri() . '/js/jquery.easing.1.3.js');
    wp_enqueue_script( 'bt', get_template_directory_uri() . '/js/bootstrap.min.js');
    wp_enqueue_script( 'jwaypints', get_template_directory_uri() . '/js/jquery.waypoints.min.js');
    wp_enqueue_script( 'jflex', get_template_directory_uri() . '/js/jquery.flexslider-min.js');
    wp_enqueue_script( 'stickykit', get_template_directory_uri() . '/js/sticky-kit.min.js');
    wp_enqueue_script( 'ocarousel', get_template_directory_uri() . '/js/owl.carousel.min.js');
    wp_enqueue_script( 'countto', get_template_directory_uri() . '/js/jquery.countTo.js');
    wp_enqueue_script( 'jsmain', get_template_directory_uri() . '/js/main.js');

}

add_action( 'wp_enqueue_scripts', 'snapnest_scripts' );

// theme support
add_theme_support('menus');
add_theme_support('post-thumbnails');

register_nav_menus(

    array(
        'main-menu' => __('Main Menu', 'theme'),
    )

);
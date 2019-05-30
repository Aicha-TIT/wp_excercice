<?php

// C'et quoi les "$args" et d'où elle vient ?
function add_additional_class_on_li($classes, $item, $args)
{
    if ($args->add_li_class) {
        $classes[] = $args->add_li_class;
        // porquoi invoquer le "$args" ? et c'est quoi le `add_li_class`
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 100);

// pour quoi tu as ajouté ce filtre ?
// c'est quoi le 'nav_menu_css_class' ?
// c'est quoi le 'add_additional_class_on_li'
// c'est quoi le "1" / c'est quoi la valeur par defaut ?
// c'est quoi le "3"
//-------------------------//
//c'est quoi la diference entre un "filter" et un "action" ?

add_post_type_support('post', 'page-attributes');

add_theme_support('menus'); // add_theme_support ?

function cb2w_register_theme_menus()
{
    register_nav_menus(
        array(
            'primary-menu' => __('Primay Menu'),
        )
        );
}
add_action('init', 'cb2w_register_theme_menus');

function university_features()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'university_features');



function cb2w_theme_styles()
{
    wp_enqueue_style('bootstrap_css', get_template_directory_uri(). '/css/bootstrap.css') ;

    wp_enqueue_style('animate_css', get_template_directory_uri(). '/css/animate.css') ;

    wp_enqueue_style('carousel_css', get_template_directory_uri(). '/css/owl.carousel.min.css') ;

    wp_enqueue_style('ionicon_font_css', get_template_directory_uri(). '/fonts/ionicons/css/ionicons.min.css') ;

    wp_enqueue_style('font_awesome_css', get_template_directory_uri(). '/fonts/fontawesome/css/font-awesome.min.css') ;

    wp_enqueue_style('flaticon_font_css', get_template_directory_uri(). '/fonts/flaticon/font/flaticon.css') ;

    wp_enqueue_style('style_css', get_template_directory_uri(). '/css/style.css') ;
    wp_enqueue_style('style', get_template_directory_uri(). '/style.css') ;

    wp_enqueue_script('jquery_3.2.1_js', get_template_directory_uri(). '/js/jquery-3.2.1.min.js', 1, '', true) ;
}

add_action('wp_enqueue_scripts', 'cb2w_theme_styles');

//c'est quoi le 'wp_enqueue_scripts' et pourquoi faire ici ?

function cb2w_theme_js()
{
    //
    wp_enqueue_script('jquery_migrate', get_template_directory_uri(). '/js/jquery-migrate-3.0.0.js') ;

    wp_enqueue_script('popper_js', get_template_directory_uri(). '/js/popper.min.js') ;
    //
    wp_enqueue_script('bootstrap_js', get_template_directory_uri(). '/js/bootstrap.min.js') ;
    //
    wp_enqueue_script('owl_carousel_js', get_template_directory_uri(). '/js/owl.carousel.min.js') ;
    //
    wp_enqueue_script('jquery_waypoints_js', get_template_directory_uri(). '/js/jquery.waypoints.min.js') ;
    //
    wp_enqueue_script('jquery_stellar', get_template_directory_uri(). '/js/jquery.stellar.min.js') ;

    wp_enqueue_script('main_js', get_template_directory_uri(). '/js/main.js') ;
}
add_action('wp_footer', 'cb2w_theme_js');
//c'est quoi le 'wp_footer' et pourquoi faire ici ?

//add_action ( 'wp_enqueue_scripts', 'cb2w_theme_js');

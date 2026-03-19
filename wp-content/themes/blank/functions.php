<?php
function hb_enqueue_assets() {
    wp_enqueue_style( 'hb-google-fonts', 'https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap', array(), null );
    wp_enqueue_style( 'hb-main-style', get_stylesheet_uri(), array(), '1.5' );
    
    if ( is_front_page() ) {
        wp_enqueue_style( 'hb-front-page-style', get_template_directory_uri() . '/front-page.css', array('hb-main-style'), '1.9' );
    }
    
    if ( is_page('aboutme') ) {
        wp_enqueue_style( 'hb-aboutme-style', get_template_directory_uri() . '/aboutme.css', array('hb-main-style'), '1.7' );
    }
    
    if ( is_page('travel') ) {
        wp_enqueue_style( 'hb-travel-style', get_template_directory_uri() . '/travel.css', array('hb-main-style'), '1.0' );
    }
    
    if ( is_page('contact') ) {
        wp_enqueue_style( 'hb-contact-style', get_template_directory_uri() . '/contact.css', array('hb-main-style'), '1.0' );
    }
    
    if ( is_page('projects') ) {
        wp_enqueue_style( 'hb-projects-style', get_template_directory_uri() . '/projects.css', array('hb-main-style'), '1.0' );
    }
    
    wp_enqueue_script( 'hb-navbar', get_template_directory_uri() . '/navbar.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'hb_enqueue_assets' );

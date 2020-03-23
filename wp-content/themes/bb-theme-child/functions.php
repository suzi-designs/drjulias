<?php

// Defines
define( 'FL_CHILD_THEME_DIR', get_stylesheet_directory() );
define( 'FL_CHILD_THEME_URL', get_stylesheet_directory_uri() );

// Classes
require_once 'classes/class-fl-child-theme.php';

// Actions
add_action( 'wp_enqueue_scripts', 'FLChildTheme::enqueue_scripts', 1000 );

function create_custom_post_types() {
    register_post_type( 'exosomes',
        array(
            'labels' => array(
                'name' => __( 'Exosomes' ),
                'singular_name' => __( 'Exosome' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'exosomes' ),
        )
    );
    
}

add_action( 'init', 'create_custom_post_types' );




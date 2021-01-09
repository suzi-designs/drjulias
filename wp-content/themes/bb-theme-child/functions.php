<?php

// Defines
define( 'FL_CHILD_THEME_DIR', get_stylesheet_directory() );
define( 'FL_CHILD_THEME_URL', get_stylesheet_directory_uri() );

// Classes
require_once 'classes/class-fl-child-theme.php';

// Actions
add_action( 'wp_enqueue_scripts', 'FLChildTheme::enqueue_scripts', 1000 );

// Change Pods MORE FIELDS Metabox Title to Custom

add_filter('pods_meta_default_box_title','ni_changethatname',10,5);

function ni_changethatname($title, $pod, $fields, $type, $name ) {

//  To change another pod, copy this function and stack it right below so it's all within the same function. ' 
  $title = ($name=='exosomes') ? __('Exosomes Info', 'plugin_lang') : $title ;
  
  
  return $title;
}





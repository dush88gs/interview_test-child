<?php

// enqueue styles and scripts
function interview_test_child_theme_enqueue_styles () {

  $parenthandle = 'interview_test-style';

  wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'child-style', get_stylesheet_uri(), array( $parenthandle ) );
}

add_action( 'wp_enqueue_scripts', 'interview_test_child_theme_enqueue_styles' );

// disable emoji loading
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );


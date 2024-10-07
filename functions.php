<?php
  define('INTEO_THEME_ROOT', get_template_directory_uri());
  define('INTEO_IMG_DIR', INTEO_THEME_ROOT . '/assets/img' );

  add_action( 'wp_enqueue_scripts', 'add_styles');
  add_action( 'after_setup_theme', 'add_features');
  add_action( 'after_setup_theme', 'theme_register_nav_menu' );

  function add_styles() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
  }

  function add_features() {
    add_theme_support( 'custom-logo', [
    'height'               => 32,
		'width'                => 88,
		'flex-height'          => false,
		'flex-width'           => false,
		'header-text'          => '',
		'unlink-homepage-logo' => false,
    ]);
  }

  function theme_register_nav_menu() {
    register_nav_menu( 'main', 'Main Menu' );
  }
?>
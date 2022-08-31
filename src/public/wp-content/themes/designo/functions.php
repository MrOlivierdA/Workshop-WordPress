<?php 

  function register_theme_menus() {
    register_nav_menus( 
      array(
        'menu-header-1' => __( 'Header 1' ),
        'menu-footer-1' => __( 'Footer 1' ),
      )
    );
  };
  add_action( 'init', 'register_theme_menus' ); 
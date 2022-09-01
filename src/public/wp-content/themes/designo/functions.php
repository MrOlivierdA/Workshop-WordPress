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

  // Remove Gutenberg
    // for posts
  add_filter('use_block_editor_for_post', '__return_false', 10);
  // for post types
  add_filter('use_block_editor_for_post_type', '__return_false', 10);


// Re-organise the dashboard menu
function my_wpadmin_sidebar_menu() {
      remove_menu_page( 'index.php' );  // 'Dashboard'
      remove_menu_page( 'upload.php' );   // 'Media'
      remove_menu_page( 'edit.php' );
      remove_menu_page( 'edit-comments.php' );
      remove_submenu_page('upload.php','media-new.php'); 
      remove_submenu_page('plugins.php','plugin-install.php'); //plugins
      remove_submenu_page('plugins.php','plugin-editor.php');
  }
  add_action('admin_menu','my_wpadmin_sidebar_menu', 999);

require 'wp_image.php';
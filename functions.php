<?php

  if (!function_exists('ajmtheme_module')) {
      function ajmtheme_module()
      {

      // Add theme support
          add_theme_support('title-tag');
          add_theme_support('html5', array( 'search-form', 'caption', 'widgets' ));
          add_theme_support('post-thumbnails');
          add_theme_support( 'custom-logo' );
          add_image_size('resource-thumbnail', 273, 353, true);
          add_image_size('blog-thumbnail', 451, 245, true);
          add_image_size('post-hero', 1800, 400, true);
          add_theme_support('custom-header', array(
        'video' => true,
        'video-active-callback' => 'custom_video_active_callback'
        ));
      }
  }
  add_action('init', 'ajmtheme_module');


  // Enqueue scripts
  require_once(get_stylesheet_directory() . '/lib/enqueue_scripts.php');

  // ACF Utilities
  require_once(get_stylesheet_directory() . '/lib/acf_utils.php');

  // Admin Tweaks
  require_once(get_stylesheet_directory() . '/lib/admin_settings.php');

  // Add theme support
  require_once(get_stylesheet_directory() . '/lib/theme_support.php');

  // Add support for author box
  //require_once( get_stylesheet_directory() . '/inc/author-box.php' );

  // Add support for widgets & sidebars
  require_once(get_stylesheet_directory() . '/lib/widgets.php');

  // Inc
  require_once(get_stylesheet_directory() . '/inc/analytics.php');

  // Register all navigation menus
  require_once(get_stylesheet_directory() . '/lib/menus.php');

  // Custom template tags for this theme
  require_once(get_stylesheet_directory() . '/inc/template-tags.php');

  // Customizer additions
  require_once(get_stylesheet_directory() . '/inc/customizer.php');

  function ajmtheme_setup()
  {
      // Clean and sanatize functions
      require_once(get_stylesheet_directory() . '/lib/theme_cleanup.php');
  }
  add_action('after_theme_setup', 'ajmtheme_setup');

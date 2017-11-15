<?php

// Add custom logo support to theme
// https://developer.wordpress.org/themes/functionality/custom-logo/
function ajm_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 100,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'ajm_custom_logo_setup' );

// Active Class for WordPress
// https://webdesignerhut.com/active-class-navigation-menu/
function ajm_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}
add_filter('nav_menu_css_class' , 'ajm_nav_class' , 10 , 2);

// Add body class if is mobile device
function ajm_body_class($classes)
{
    if (wp_is_mobile()) {
        $classes[] = 'ajm-is-mobile';
    }
    return $classes;
};
add_filter('body_class', 'ajm_body_class');

// Add slug to body class
function ajm_body_class_slug($classes)
{
    global $post;
    if (isset($post)) {
        $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
}
add_filter('body_class', 'ajm_body_class_slug');


// By default, the logo links to wordpress.org. Let's change that.
function ajm_login_logo_url()
{
    return get_bloginfo('url');
}
add_filter('login_headerurl', 'ajm_login_logo_url');

// Change the title text for the login logo
function ajm_login_logo_url_title()
{
    return 'Alex Mamel - UX Designer and Developer';
}
add_filter('login_headertitle', 'ajm_login_logo_url_title');

/*--------------------------------------------------
 HELPERS
--------------------------------------------------*/

// Helpful function to display the year
function ajm_display_year()
{
    return date('Y');
}
add_shortcode('display-year', 'ajm_display_year');


// Redirecting and 404ing unnecessary pages
  function ajm_template_redirect()
  {
      global $wp_query, $post;

      if (is_attachment()) {
          $post_parent = $post->post_parent;

          if ($post_parent) {
              wp_redirect(get_permalink($post->post_parent), 301);
              exit;
          }

          $wp_query->set_404();

          return;
      }

      if (is_author() || is_date()) {
          $wp_query->set_404();
      }
  }
add_action('template_redirect', 'ajm_template_redirect');

// Remove WP Version from CSS & JS
function ajm_remove_ver_css_js($src, $handle)
{
    $handles_with_version = [ 'style' ]; // <-- Adjust to your needs!

    if (strpos($src, 'ver=') && ! in_array($handle, $handles_with_version, true)) {
        $src = remove_query_arg('ver', $src);
    }

    return $src;
}
add_filter('style_loader_src', 'ajm_remove_ver_css_js', 9999, 2);
add_filter('script_loader_src', 'ajm_remove_ver_css_js', 9999, 2);

// Remove WP Version Number
function ajm_remove_version()
{
    return '';
}
add_filter('the_generator', 'ajm_remove_version');



// Show notice on dev. and staging
function ajm_env_notice()
{
    if (WP_ENV != 'production') {
        echo '<p class="' . WP_ENV . ' env-notice">' . WP_ENV . '</p>';
    }
}
add_action('wp_head', 'ajm_env_notice', 100);

// Set limit for post revisions to 5
if (!defined('WP_POST_REVISIONS')) {
    define('WP_POST_REVISIONS', 5);
}

// Add excerpts to pages
  function ajm_add_excerpts_to_pages()
  {
      add_post_type_support('page', 'excerpt');
  }
 add_action('init', 'ajm_add_excerpts_to_pages');


 // Move excerpt box to top of post editor
// https://wpartisan.me/tutorials/wordpress-how-to-move-the-excerpt-meta-box-above-the-editor

/**
 * Removes the regular excerpt box. We're not getting rid
 * of it, we're just moving it above the wysiwyg editor
 *
 * @return null
 */
function ajm_remove_normal_excerpt()
{
    remove_meta_box('postexcerpt', 'post', 'normal');
}
add_action('admin_menu', 'ajm_remove_normal_excerpt');

/**
 * Add the excerpt meta box back in with a custom screen location
 *
 * @param  string $post_type
 * @return null
 */
function ajm_add_excerpt_meta_box($post_type)
{
    if (in_array($post_type, array( 'post', 'page' ))) {
        add_meta_box(
            'ajm_postexcerpt',
            __('Excerpt', 'thetab-theme'),
            'post_excerpt_meta_box',
            $post_type,
            'after_title',
            'high'
        );
    }
}
add_action('add_meta_boxes', 'ajm_add_excerpt_meta_box');

/**
 * You can't actually add meta boxes after the title by default in WP so
 * we're being cheeky. We've registered our own meta box position
 * `after_title` onto which we've regiestered our new meta boxes and
 * are now calling them in the `edit_form_after_title` hook which is run
 * after the post tile box is displayed.
 *
 * @return null
 */
function ajm_run_after_title_meta_boxes()
{
    global $post, $wp_meta_boxes;
    # Output the `below_title` meta boxes:
    do_meta_boxes(get_current_screen(), 'after_title', $post);
}
add_action('edit_form_after_title', 'ajm_run_after_title_meta_boxes');




// Chrome broke WordPress Admin Panel – here’s how to fix that
function admin_menu_chrome_bug_fix()
{
    echo '<style>
        #adminmenu { transform: translateZ(0); }
    </style>';
}
add_action('admin_head', 'admin_menu_chrome_bug_fix');

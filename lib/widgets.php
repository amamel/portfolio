<?php

function ajm_site_notice()
{
    $notice = get_option('ajm_site_notice');
    if (!empty($notice)) {
        echo '<div id="ck-notice">' . $notice . ' <a href="#" class="close">Close</a></div>';
    }
}
add_action('after_setup_theme', 'ajm_site_notice');

// Remove WP admin dashboard widgets
function ajm_disable_dashboard_widgets()
{

    // Remove Welcome to WordPress
    remove_action('welcome_panel', 'wp_welcome_panel');

    // Remove "At a Glance"
    remove_meta_box('dashboard_right_now', 'dashboard', 'normal');

    // Remove "Activity" which includes "Recent Comments"
    //remove_meta_box('dashboard_activity', 'dashboard', 'normal');

    // Remove Quick Draft
    remove_meta_box('dashboard_quick_press', 'dashboard', 'side');

    // Remove WordPress News
    remove_meta_box('dashboard_primary', 'dashboard', 'core');
}
add_action('admin_menu', 'ajm_disable_dashboard_widgets');


// Create blog index sidebar
    // if ( function_exists('register_sidebar') ) {
    // 	register_sidebar(array(
    // 		'name' => 'Blog Index Sidebar',
    // 		'id' => 'blog-sidebar',
    // 		'description' => 'Appears as the sidebar on the blog index page',
    // 		'before_widget' => '<div style="height: 280px"></div><li id="%1$s" class="widget %2$s">',
    // 		'after_widget' => '',
    // 		'before_title' => '<h6 class="widgettitle">',
    // 		'after_title' => '</h6>',
    // 	) );
    // }

// Press Sidebar
// Create blog index sidebar
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'Press Sidebar',
        'id' => 'press-sidebar',
        'description' => 'Appears as the sidebar on the press page',
        'before_widget' => '<div style="height: 280px"></div><li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h6 class="widgettitle">',
        'after_title' => '</h6>',
    ));
}

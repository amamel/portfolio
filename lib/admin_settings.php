<?php

// Customize dashboard footer information
function ajm_modify_admin_footer()
{
    echo 'Powered by <a title="WordPress" style="text-decoration:none;" href="https://www.wordpress.org" target="_blank">WordPress</a> | <a title="Built with love by Alex Mamel" style="text-decoration:none;" href="https://alexmamel.com" target="_blank">Built with ♡ by Alex Mamel</a></p>';
}
add_filter('admin_footer_text', 'ajm_modify_admin_footer');

// Remove 'Howdy' in admin bar
function ajm_replace_howdy($wp_admin_bar)
{
    $my_account=$wp_admin_bar->get_node('my-account');
    $newtitle = str_replace('Howdy,', 'Logged in as', $my_account->title);
    $wp_admin_bar->add_node(array(
        'id' => 'my-account',
        'title' => $newtitle,
    ));
}
add_filter('admin_bar_menu', 'ajm_replace_howdy', 25);

// Disable support for comments and trackbacks in post types
function ajm_disable_comments_post_types_support()
{
    $post_types = get_post_types();
    foreach ($post_types as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
}
add_action('admin_init', 'ajm_disable_comments_post_types_support');

// Close comments on the front-end
function ajm_disable_comments_status()
{
    return false;
}
add_filter('comments_open', 'ajm_disable_comments_status', 20, 2);
add_filter('pings_open', 'ajm_disable_comments_status', 20, 2);

// Hide existing comments
function ajm_disable_comments_hide_existing_comments($comments)
{
    $comments = array();
    return $comments;
}
add_filter('comments_array', 'ajm_disable_comments_hide_existing_comments', 10, 2);

// Remove comments page in menu
function ajm_disable_comments_admin_menu()
{
    remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'ajm_disable_comments_admin_menu');

// Redirect any user trying to access comments page
function ajm_disable_comments_admin_menu_redirect()
{
    global $pagenow;
    if ($pagenow === 'edit-comments.php') {
        wp_redirect(admin_url());
        exit;
    }
}
add_action('admin_init', 'ajm_disable_comments_admin_menu_redirect');

// Remove comments metabox from dashboard
function ajm_disable_comments_dashboard()
{
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
}
add_action('admin_init', 'ajm_disable_comments_dashboard');

// Remove comments links from admin bar
function ajm_disable_comments_admin_bar()
{
    if (is_admin_bar_showing()) {
        remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
    }
}
add_action('init', 'ajm_disable_comments_admin_bar');

// Hide admin bar for non-admin users
function ajm_remove_admin_bar()
{
    if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    }
}
add_action('after_setup_theme', 'ajm_remove_admin_bar');

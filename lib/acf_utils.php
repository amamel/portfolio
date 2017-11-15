<?php

/*
    ================================================
    Add options page
    Global, Footer, Social Media Links, Style.
    ================================================
*/
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'    => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'        => false
    ));

        acf_add_options_sub_page(array(
        'page_title'    => 'Theme Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'    => 'theme-general-settings',
    ));

        acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'    => 'theme-general-settings',
    ));
    }

// Make custom fields work with Yoast SEO (only impacts the light, but helpful!)
// https://imperativeideas.com/making-custom-fields-work-yoast-wordpress-seo/

if (is_admin()) { // check to make sure we aren't on the front end
    add_filter('wpseo_pre_analysis_post_content', 'ajm_add_custom_to_yoast');

    function ajm_add_custom_to_yoast($content)
    {
        global $post;
        $pid = $post->ID;

        $custom = get_post_custom($pid);
        unset($custom['_yoast_wpseo_focuskw']); // Don't count the keyword in the Yoast field!

        foreach ($custom as $key => $value) {
            if (substr($key, 0, 1) != '_' && substr($value[0], -1) != '}' && !is_array($value[0]) && !empty($value[0])) {
                $custom_content .= $value[0] . ' ';
            }
        }

        $content = $content . ' ' . $custom_content;
        return $content;

        remove_filter('wpseo_pre_analysis_post_content', 'ajm_add_custom_to_yoast'); // don't let WP execute this twice
    }
}

<?php

/*--------------------------------------------------
 CLEANUP & OPTIMIZE PROCESSES
--------------------------------------------------*/
function ajmtheme_cleanup()
{

// ---
    // --- Clean junk from Wordpress head, widgets, and styles
    // ---

    // removes the “generator” meta tag from the document header (we definitely don’t need to let the world know that we are using WordPress and actually we are rather ashamed about it).
    remove_action('wp_head', 'wp_generator');

    // removes the “wlwmanifest” link. wlwmanifest.xml is the resource file needed to enable support for Windows Live Writer. Nobody on Earth needs that. Note that this command simply removes the link, if you want to completely disable the functionality you need to deny access to the file /wp-includes/wlwmanifest.xml probably from your .htaccess (but that’s not strictly needed).
    remove_action('wp_head', 'wlwmanifest_link');

    // The RSD is an API to edit your blog from external services and clients. If you edit your blog exclusively from the WP admin console, you don’t need this.
    remove_action('wp_head', 'rsd_link');

    // Removes Index link
    remove_action('wp_head', 'index_rel_link');

    // “wp_shortlink_wp_head” adds a “shortlink” into your document head that will look like http://example.com/?p=ID. No need, thanks.
    remove_action('wp_head', 'wp_shortlink_wp_head');

    // Removes a link to the next and previous post from the document header. This could be theoretically beneficial, but to my experience it introduces more problems than it solves. Please note that this has nothing to deal with the “next/previous” post that you may want to add at the end of each post.
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10);

    // removes the canonical link
    remove_action('wp_head', 'rel_canonical', 10, 0);

    // removes the next and previous post links
    remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);

    // removes the parent post link
    remove_action('wp_head', 'parent_post_rel_link', 10, 0);

    // removes the random post link
    remove_action('wp_head', 'start_post_rel_link', 10, 0);

    // Disable auto p tags in wysiwyg editor. Damned auto paragraphs.
    remove_filter('acf_the_content', 'wpautop');
    remove_filter('term_description', 'wpautop');
    remove_filter('the_content', 'wpautop');
    remove_filter('the_excerpt', 'wpautop');
    // Removes the administrator’s bar and also the associated CSS styles. Especially during the development phase I find it very annoying.
    // add_filter( 'show_admin_bar','__return_false');

    // Removes the generator name from the RSS feeds.
    add_filter('the_generator', '__return_false');

    // remove rss feed links
    remove_action('wp_head', 'feed_links', 2);

    // removes category feed links
    remove_action('wp_head', 'feed_links_extra', 3);

    // No cookies, please
    remove_action('set_comment_cookies', 'wp_set_comment_cookies');

    // Removes WP 4.2 emoji styles and JS. Nasty stuff.
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');

    // remove the REST API link
    remove_action('wp_head', 'rest_output_link_wp_head', 10);

    // remove the oEmbed REST API route
    remove_action('rest_api_init', 'wp_oembed_register_route');

    // Turn off oEmbed auto discovery.
    add_filter('embed_oembed_discover', '__return_false');

    // Remove inline gallery styles
    add_filter('use_default_gallery_style', '__return_false');

    // don't filter oEmbed results
    remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);

    // remove oEmbed discovery links
    remove_action('wp_head', 'wp_oembed_add_discovery_links');

    // remove oEmbed-specific javascript from front-end / back-end
    remove_action('wp_head', 'wp_oembed_add_host_js');

    // remove the REST API link from HTTP Headers
    remove_action('template_redirect', 'rest_output_link_header', 11, 0);
}
add_action('after_setup_theme', 'ajmtheme_cleanup');

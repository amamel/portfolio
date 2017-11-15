<?php


// Enqueue ajm scripts and styles
function ajm_theme_scripts()
{

// Use jQuery from CDN, enqueue in footer
    if (!is_admin()) {
        wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', false, '3.2.1');
        wp_enqueue_script('jquery');
        //wp_dequeue_script('jquery-migrate');
        //wp_register_script( 'jquery-migrate', "//code.jquery.com/jquery-migrate-3.0.0.min.js", array(), '3.0.0' );
        //wp_enqueue_script('jquery-migrate');
    }


    // CSS Use minified on staging and prod, unminified on dev.
    // Enqueue parent styles first
    //wp_enqueue_style('parent-theme', get_template_directory_uri() .'/style.css');

    if (WP_ENV == 'development') {
        wp_enqueue_style('ajm-styles', get_stylesheet_directory_uri() . '/assets/css/main.css');
        wp_enqueue_script('ajm-js', get_stylesheet_directory_uri() . '/assets/js/build/scripts.js', null, true);
    } else {
        wp_enqueue_style('ajm-styles', get_stylesheet_directory_uri() . '/assets/css/main.min.css');
        wp_enqueue_script('ajm-js', get_stylesheet_directory_uri() . '/assets/js/build/scripts.min.js', null, true);
    }

    // Initialize navigation.js
    //wp_register_script('navigation', get_stylesheet_directory_uri() . '/assets/js/navigation.js', [], null, true);
    //wp_enqueue_script('navigation');

    // Initialize fastclick.js
    // Polyfill to remove click delays on browsers with touch UIs
    //wp_register_script('fastclick', get_stylesheet_directory_uri() . '/assets/js/vendor/fastclick.min.js', [], '1.0.6', true);
    //wp_enqueue_script('fastclick');

    // Initialize skip-link-focus-fix.js
    wp_register_script('skip-link-focus-fix', get_stylesheet_directory_uri() . '/assets/js/skip-link-focus-fix.js', [], null, true);
    wp_enqueue_script('skip-link-focus-fix');

    // Dequeue & deregister 2017 Theme fonts
    // We load our own fonts below
    //wp_dequeue_style('twentyseventeen-fonts');
    //wp_deregister_script('twentyseventeen-fonts');

    // Initialize Google web-font loader
    // Prevents FOWT (Flash of white text)
    wp_register_script('web-font-loader', '//cdnjs.cloudflare.com/ajax/libs/webfont/1.6.28/webfontloader.js', array(), null, true);
    wp_enqueue_script('web-font-loader');
    wp_add_inline_script('web-font-loader', 'WebFontConfig={google:{families:["Heebo:400,500, 900"]}},function(a){var b=a.createElement("script"),c=a.scripts[0];b.src="https://cdnjs.cloudflare.com/ajax/libs/webfont/1.6.28/webfontloader.js",c.parentNode.insertBefore(b,c)}(document);', 'after');
}
add_action('wp_enqueue_scripts', 'ajm_theme_scripts');

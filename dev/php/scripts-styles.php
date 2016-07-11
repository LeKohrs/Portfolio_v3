<?php

/*
 * ENQUEUE SCRIPTS AND STYLES
 */

if(!function_exists('abessive_scripts_method')) {
    function abessive_scripts_method()
    {
        //script includes
        wp_enqueue_script('jquery', '', '', '', true);
        wp_enqueue_script('abessive_modernizr', get_template_directory_uri() . '/js/vendor/modernizr.2.8.3.min.js');
        wp_enqueue_script('abessive_TweenMax', get_template_directory_uri() . '/js/vendor/TweenMax.min.js','', '',
            true);
        wp_enqueue_script('abessive_TimelineMax', get_template_directory_uri() . '/js/vendor/TimelineMax.min.js','',
            '',
            true);
        if (is_page_template('front-page.php')) {
            wp_enqueue_script('abessive_index', get_template_directory_uri() . '/js/site/index.js','', '', true);
        } else {
            wp_enqueue_script('abessive_app', get_template_directory_uri() . '/js/site/app.js','', '', true);
        }



        //stylesheet includes
        wp_enqueue_style('abessive_main_styles', get_template_directory_uri() . '/css/styles.css', false);
    }
}

add_action('wp_enqueue_scripts', 'abbessive_scripts_method', 100);
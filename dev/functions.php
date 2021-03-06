<?php
/*
 * INCLUDE ALL PHP FILES NEEDED FOR ABESSIVE THEME
 */

include_once('php/scripts-styles.php');
include_once('php/menus.php');
include_once('php/config.php');
include_once('php/sidebar.php');

/**
 * abessive_theme_init()
 *
 * This is the primer for all the customizations in this theme. Don't like something in here? No worries, just make a
 * child theme. In child's functions.php, copy/paste this function and only call the functions you want!
 *
 * Editing this file directly is not advised!
 */
if (!function_exists('abessive_theme_init')) {
    function abessive_theme_init()
    {
        //enqueue all the things! (modernizr, jQuery, comment-reply, styles)
        add_action('wp_enqueue_scripts', 'abessive_scripts_method');
        //register menus
        abessive_register_menus();
        //add thumbnail support and set widths
        abessive_post_thumbnail_support();
        // Link post thumbnail to post permalink
        add_filter('post_thumbnail_html', 'abessive_post_image_html', 10, 3);
        //set image max width
        abessive_set_max_image_width();
        //initialize the sidebar
        add_action('init', 'abessive_widgets_init');
        // Remove width/height attribute on inserted images
        add_filter('post_thumbnail_html', 'abessive_remove_width_attribute', 10);
        // Images are sized via CSS or inline style="" attribute by user.
        add_filter('image_send_to_editor', 'abessive_remove_width_attribute', 10);
        //Enable custom menus
        add_theme_support('menus');
        // automatic feeds
        add_theme_support('automatic-feed-links');
        // SVG uploads to admin
        add_filter('upload_mimes', 'abessive_mime_types');
        // Remove the admin bar
        show_admin_bar(false); // Uncomment this line to remove the admin bar
    }
}

//thumbs up, lets go!
abessive_theme_init();

function excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
    } else {
        $excerpt = implode(" ",$excerpt);
    }
    $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
    return $excerpt;
}

function content($limit) {
    $content = explode(' ', get_the_content(), $limit);
    if (count($content)>=$limit) {
        array_pop($content);
        $content = implode(" ",$content).'...';
    } else {
        $content = implode(" ",$content);
    }
    $content = preg_replace('/\[.+\]/','', $content);
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);
    return $content;
}

add_action( 'after_setup_theme', 'my_adjust_image_sizes' );
function my_adjust_image_sizes() {
    //add an cropped image-size with 400 X 400 Pixels
    add_image_size( 'my-custom-image-size', 400, 400, true );
}
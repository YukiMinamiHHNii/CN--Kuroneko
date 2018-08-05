<?php

global $googleFonts;

$googleFonts = 'https://fonts.googleapis.com/css?family=Roboto';

function kuroneko_scripts(){
    global $googleFonts;

    wp_enqueue_style('googleFonts', $googleFonts, array(), 'all');
    wp_enqueue_script('jquery');
    wp_enqueue_style('style', get_stylesheet_uri(), array('googleFonts'), 'all');
}

function kuroneko_setup(){
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'comment-list',
        'comment-form',
        'search-form',
        'gallery',
        'caption',
    ));
    add_theme_support('post-formats', array(
        'aside',
        'gallery',
        'link',
        'image',
        'quote',
        'status',
        'video',
        'audio',
        'chat',
    ));
    add_theme_support('title-tag');
    add_theme_support('custom-logo', array(
        'width' => 100,
        'height' => 100,
        'flex-width' => true,
        'flex-height' => true,
    ));
    remove_action('wp_head', 'wp_generator');
}

function kuroneko_excerpt_more(){
    return '...<br/> <a href="'.get_permalink().'">Read more</a>';
}

add_filter('excerpt_more', 'kuroneko_excerpt_more');

function kuroneko_excerpt_length(){
    return 30;
}

add_filter('excerpt_length', 'kuroneko_excerpt_length');
add_filter('show_admin_bar', '__return_false');

add_action('wp_enqueue_scripts', 'kuroneko_scripts');
add_action('after_setup_theme', 'kuroneko_setup');

<?php

//=======================================================
//                  Chargement des scripts
//=======================================================

define('version', '1.0.0');

function scripts(){
    wp_enqueue_style('custom', get_template_directory_uri() . '/style.css', array('bootstrap'), 'version', 'all');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), 'version', 'all');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), 'version', true);
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/app.js', array('jquery', 'bootstrap-js'), 'version', true);
    remove_action('wp_head', '_admin_bar_bump_cb');
}

add_action('wp_enqueue_scripts', 'scripts');

function admin_init(){
    function admin_script(){

    }
    add_action('wp_enqueue_scripts', 'admin_script');

}
add_action('wp_enqueue_scripts', 'admin_init');

//=======================================================
//                 Utilitaire
//=======================================================

function setup(){

    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');

    register_nav_menus(array('primary' => 'principal'));


}

add_action('after_setup_theme', 'setup');

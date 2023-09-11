<?php

function cyber_trucks_domains_stylesheets() {
wp_enqueue_style('style', get_stylesheet_uri() );

wp_enqueue_style('layout', get_theme_file_uri('/css/layout.css'));
wp_enqueue_style('body', get_theme_file_uri('/css/body.css'));

// fonts
wp_enqueue_style('fonts', get_theme_file_uri('/css/fonts.css'));
wp_enqueue_style('proxima-nova', get_theme_file_uri('/proxima-nova/proxima-nova.css'));

}
add_action('wp_enqueue_scripts', 'cyber_trucks_domains_stylesheets');

function cyber_trucks_domains_menus() {
	register_nav_menus( array(
	  'primary' => __( 'Primary' )));
   register_nav_menus( array(
   'secondary' => __( 'Secondary' )));
	register_nav_menu('footer',__( 'Footer' ));
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
   }
   
   add_action('after_setup_theme', 'cyber_trucks_domains_menus');
<?php
function c13theme_script_enqueue(){
  wp_enqueue_style('customstyle', get_template_directory_uri().'/custom/custom.css', [], '1.0.0', 'all');
  wp_enqueue_script('customjs', get_template_directory_uri().'/custom/custom.js', [], '1.0.0', true);
};
add_action('wp_enqueue_scripts', 'c13theme_script_enqueue');

//Adding menus - headers and footers
add_theme_support('menus');
function c13theme_setup(){
  add_theme_support('menus');
  register_nav_menu('primary', 'primary header');
  register_nav_menu('secondary', 'secondary menu..footer');
};

add_action('init', 'c13theme_setup');

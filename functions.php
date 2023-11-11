<?php

add_action('wp_enqueue_scripts', 'theme_name_styles');
add_action('wp_enqueue_scripts', 'arcada_scripts');

function theme_name_styles()
{
  wp_enqueue_style('animate-style', get_template_directory_uri() . '/assets/css/animate.css');
  wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.css');
  wp_enqueue_style('slick-theme-style', get_template_directory_uri() . '/assets/css/slick-theme.css');
  wp_enqueue_style('slick-style', get_template_directory_uri() . '/assets/css/slick.css');
  wp_enqueue_style('slicknav-style', get_template_directory_uri() . '/assets/css/slicknav.min.css');
  wp_enqueue_style('main-style', get_stylesheet_uri());
}

function arcada_scripts()
{
  wp_deregister_script('jquery');
  wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js');
  wp_enqueue_script('jquery');

  wp_enqueue_script('maskedinput', get_template_directory_uri() . '/assets/js/jquery.maskedinput.min.js', array('jquery'), null, true);
  wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), null, true);
  wp_enqueue_script('slicknav', get_template_directory_uri() . '/assets/js/jquery.slicknav.min.js', array('jquery'), null, true);
  wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array('jquery'), null, true);
  wp_enqueue_script('ie10-viewport', 'https://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js', array('jquery'), null, true);
}

add_theme_support('custom-logo');
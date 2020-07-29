<?php
defined('ABSPATH') or die('rien à voir');

add_action('after_setup_theme', function () {
  add_theme_support('title-tag');
  add_theme_support('menus');
  add_theme_support('html5');
  add_theme_support('post-thumbnails'); 
  add_post_type_support('page', 'excerpt'); 
  load_theme_textdomain('emmaevent', get_template_directory() . '/languages');
});

/** Upload SVG medias */
add_filter('upload_mimes', function ($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
});
<?php
add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style('main', get_template_directory_uri() . '/style.css');
  wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', [], false, true);
});





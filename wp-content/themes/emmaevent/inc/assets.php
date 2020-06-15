<?php
add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style('main', get_template_directory_uri() . '/style.css');
  wp_enqueue_script('emmaevent', get_template_directory_uri() . '/assets/js/script.js',array('jquery'),'1.0',true);
});





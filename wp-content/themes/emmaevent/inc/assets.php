<?php
add_action('wp_enqueue_scripts', function () {
  // wp_enqueue_style('main', get_template_directory_uri() . '/style.css');  
  wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', [], false, true);
  wp_enqueue_script('script-perso', get_stylesheet_directory_uri() . '/assets/js/custom.js', array('jquery'), false, true);
  wp_enqueue_style( 'cookie-consent', 'https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css', false );
  // wp_enqueue_style( 'normalize-styles', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css");

});
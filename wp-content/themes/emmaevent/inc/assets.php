<?php
add_action('wp_enqueue_scripts', function () {  
  wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', [], false, true);
  wp_enqueue_script('script-perso', get_stylesheet_directory_uri() . '/assets/js/custom.js', array('jquery'), false, true);
  wp_enqueue_style( 'cookie-consent', 'https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css', false );  
  wp_enqueue_style( 'font-awesome', "https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css");
});




<?php
add_action('wp_enqueue_scripts', function () {
  // wp_enqueue_style('main', get_template_directory_uri() . '/style.css');
  wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', [], false, true);
  wp_enqueue_script('script-perso', get_stylesheet_directory_uri() . '/assets/js/custom.js', array('jquery'), false, true);
<<<<<<< HEAD
});
=======
});
>>>>>>> old-state

<?php
add_action('after_setup_theme', function () {
  // Définir la taille des images mises en avant
  set_post_thumbnail_size(375,375,true);
  add_image_size('service-thumbnail', 300, 400, true);  
  add_image_size('event-carousel', 800, 600, true);
  add_image_size('event-thumbnail', 575, 575, true);  
  add_image_size('event-thumbnail-large', 1200, 320, true);  
  
});
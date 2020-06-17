<?php
add_action('after_setup_theme', function () {
  // Définir la taille des images mises en avant
  set_post_thumbnail_size(375,375,true);
  add_image_size('event-carousel', 800, 600, true);
  add_image_size('event-thumbnail', 875, 475, true);
  add_image_size('event-thumbnail-large', 875, 475, true);
});






// Définir d'autres tailles d'images
// add_image_size('products', 800, 600, false);
// add_image_size('square', 256, 256, false);
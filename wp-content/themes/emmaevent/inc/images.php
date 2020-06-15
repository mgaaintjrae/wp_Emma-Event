<?php
add_action('after_setup_theme', function () {
  // Définir la taille des images mises en avant
set_post_thumbnail_size(2000, 400, true);
});






// Définir d'autres tailles d'images
// add_image_size('products', 800, 600, false);
// add_image_size('square', 256, 256, false);
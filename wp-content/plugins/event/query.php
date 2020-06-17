<?php

// Réécriture d'url
add_action('init', function () {  
  add_rewrite_rule(_x('events', 'URL', 'event') . '/?$', 'index.php?event_category=$matches[1]', 'top');
});
<?php

// Réécriture d'url
add_action('init', function () {  
  add_rewrite_rule(_x('events', 'URL', 'event') . '/?$', 'index.php?post_type=events&event_category=$matches[1]', 'top');
});

// Menu current page
add_filter('nav_menu_css_class', function (array $classes, WP_Post $item): array {

  if (is_tax('events') && is_singular('event') && event_is_type_url($item->url)) {
    $event = get_queried_object();
    $category = get_category('event_category', $event);
    var_dump($category);
    $classes[] = 'current_page_parent';
  }

  return $classes;
}, 11, 2);

// function event_is_type_url(string $url): bool {
//   return strpos($url, _x('events', 'URL', 'event') . '/' . _x('index.php?post_type=events&event_category=$matches[1]')) !== false;
// }
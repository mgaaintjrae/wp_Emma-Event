<?php

/**
 * Ce fichier permet de déclarer les filtres supplémentaires pour filtrer les événements
 */
defined('ABSPATH') or die('rien à voir');

$eventCategories = [];

// Filtre les événements de mariages ou professionnels via le paramètre event_category
add_filter('query_vars', function (array $params): array {
  $params[] = 'event_category';
  return $params;
});
add_action('pre_get_posts', function (WP_Query $query) use (&$eventCategories): void {
  if (is_admin() || !$query->is_main_query() || !is_post_type_archive('event')) {
    return;
  }

  $values = array_keys($eventCategories);
  if (in_array(get_query_var('event_category'), $values)) {
    $meta_query = $query->get('meta_query', []);
    $meta_query[] = [
      'key' => 'event_category',
      'value' => $eventCategories[get_query_var('event_category')]
    ];
    $query->set('meta_query', $meta_query);
  }
});

// Réécriture d'url
// add_action('init', function () {
//   add_rewrite_rule(_x('events', 'URL', 'event') . '/?$', 'index.php?post_type=events&event_category=$matches[1]', 'top');
// });

add_action('init', function () use (&$eventCategories) {
  $eventCategories = [
  _x('wedding', 'URL', 'event') => 'wedding',
  _x('professional', 'URL', 'event') => 'professional'
  ];
  add_rewrite_rule(
    _x('event', 'URL', 'event') . '/(' . implode('|', array_keys($eventCategories)) . ')/?$',
    'index.php?post_type=event&event_category=$matches[1]',
    'top',
  );
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

function event_is_type_url(string $url): bool
{
  return strpos($url, _x('events', 'URL', 'event') . '/' . _x('index.php?post_type=events&event_category=$matches[1]')) !== false;
}

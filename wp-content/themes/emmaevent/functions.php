<?php
require_once('inc/supports.php');
require_once('inc/assets.php');
require_once('inc/apparence.php');
require_once('inc/menus.php');
require_once('inc/images.php');
require_once('inc/query/posts.php');


function emmaevent_icon(string $name): string {
  $spriteUrl = get_template_directory_uri() . '/assets/img/facebook.svg';
  return <<<HTML
  <svg class="icon"><use xlink:href="{$spriteUrl}#{$name}"></use></svg>
  HTML;
}

function emmaevent_paginate(): string {
  return '<div class="pagination">' . paginate_links(['prev_text' => emmaevent_icon('arrow'), 'next_text' => emmaevent_icon('arrow')]) . '</div>';
}












// Custom Post Type Events
function emmaevent_register_post_types()
{

  // CPT Evènements
  $labels = array(
    'name' => 'Evènements',
    'all_items' => 'Tous les évènements',  // affiché dans le sous menu
    'singular_name' => 'Evènement',
    'add_new_item' => 'Ajouter un évènement',
    'edit_item' => 'Modifier l\'évènement',
    'menu_name' => 'Evènement'
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'show_in_rest' => true,
    'has_archive' => true,
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
    'menu_position' => 20,
    'menu_icon' => 'dashicons-heart',
  );

  register_post_type('evenement', $args);

  // Déclaration de la Taxonomie
  $labels = array(
    'name' => 'Type d\'évènement',
    'new_item_name' => 'Nom du nouvel Evènement',
    'parent_item' => 'Type d\'évènement parent',
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'show_in_rest' => true,
    'hierarchical' => true,
  );

  register_taxonomy('type-evenement', 'portfolio', $args);
}
add_action('init', 'emmaevent_register_post_types');

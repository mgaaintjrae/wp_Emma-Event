<?php

/**
 * Plugin Name: Event Plugin
 * Description: Gestion des évènements de Emma Event
 * Version: 0.1
 * Author: Priscilla Roy ITfy
 */
add_action('init', function () {
  register_post_type('événement', [
    'label' => __('Evénement', 'event'),
    'menu_icon' => 'dashicons-admin-multisite',
    'labels' => [
      'name'                     => __('Property', 'event'),
      'singular_name'            => __('Property', 'event'),
      'edit_item'                => __('Edit property', 'event'),
      'new_item'                => __('New property', 'event'),
      'view_item'                => __('View property', 'event'),
      'view_items'                => __('View properties', 'event'),
      'search_items'                => __('Search properties', 'event'),
      'not_found'                => __('No properties found.', 'event'),
      'not_found_in_trash'                => __('No properties found in Trash', 'event'),
      'all_items'                => __('All properties', 'event'),
      'archives'                => __('Property archive', 'event'),
      'attributes'                => __('Property attributes', 'event'),
      'insert_into_item'         => __('Insert into property', 'event'),
      'uploaded_to_this_item'    => __('Uploaded to this property', 'event'),
      'filter_items_list'        => __('Filter properties list', 'event'),
      'items_list_navigation'    => __('Properties list navigation', 'event'),
      'items_list'               => __('Properties list', 'event'),
      'item_published'           => __('Property published.', 'event'),
      'item_published_privately' => __('Property published privately.', 'event'),
      'item_reverted_to_draft'   => __('Property reverted to draft.', 'event'),
      'item_scheduled'           => __('Property scheduled.', 'event'),
      'item_updated'             => __('Property updated.', 'event'),
    ],
    'public' => true,
    'hierarchical' => false,
    'exclude_from_search' => false,
    'supports' => ['title', 'editor', 'excerpt', 'thumbnail']

  ]);
});

register_activation_hook(__FILE__, 'flush_rewrite_rules');
register_deactivation_hook(__FILE__, 'flush_rewrite_rules');

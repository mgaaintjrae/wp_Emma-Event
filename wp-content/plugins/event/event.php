<?php

/**
 * Plugin Name: Event Plugin
 * Description: Gestion des évènements de Emma Event
 * Version: 1.0
 * Author: Priscilla Roy ITfy
 * Text Domain: event
 * Domain Path: /languages
 */
defined('ABSPATH') or die('rien à voir');

add_action('plugins_loaded', function () {
    load_plugin_textdomain('event', false, basename(dirname(__FILE__)) . '/languages');
});

/*
* On utilise une fonction pour créer notre custom post type 'Evénements'
*/
function emmaevent_custom_post_type()
{
    // On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
    $labels = array(
        'name'                     => __('Events', 'event'),
        'singular_name'            => __('Event', 'event'),
        'edit_item'                => __('Edit event', 'event'),
        'new_item'                => __('New event', 'event'),
        'view_item'                => __('View event', 'event'),
        'view_items'                => __('View events', 'event'),
        'search_items'                => __('Search events', 'event'),
        'not_found'                => __('No events found.', 'event'),
        'not_found_in_trash'                => __('No events found in Trash', 'event'),
        'all_items'                => __('All events', 'event'),
        'archives'                => __('Event archive', 'event'),
        'attributes'                => __('Event attributes', 'event'),
        'insert_into_item'         => __('Insert into Event', 'event'),
        'uploaded_to_this_item'    => __('Uploaded to this Event', 'event'),
        'filter_items_list'        => __('Filter Events list', 'event'),
        'items_list_navigation'    => __('Events list navigation', 'event'),
        'items_list'               => __('Events list', 'event'),
        'item_published'           => __('Event published.', 'event'),
        'item_published_privately' => __('Event published privately.', 'event'),
        'item_reverted_to_draft'   => __('Event reverted to draft.', 'event'),
        'item_scheduled'           => __('Event scheduled.', 'event'),
        'item_updated'             => __('Event updated.', 'event'),
    );
    // On peut définir ici d'autres options pour notre custom post type	
    $args = array(
        'label' => __('Events', 'event'),
        'description'         => __('All about the events'),
        'labels'              => $labels,
        // On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
        'supports' => ['title', 'author', 'editor', 'excerpt', 'thumbnail'],
        'show_in_rest'        => false,
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'            => [
            'slug' => _x('events', 'URL', 'event')
        ],
    );
    // On enregistre notre custom post type qu'on nomme ici "events" et ses arguments
    register_post_type('events', $args);
}
add_action('init', 'emmaevent_custom_post_type', 0);


add_action('init', 'emmaevent_add_taxonomies', 0);
function emmaevent_add_taxonomies()
{
    // On déclare ici les différentes dénominations de notre taxonomie qui seront affichées et utilisées dans l'administration de WordPress
    $labels_category = array(
        'name'                       => __('Categories', 'event'),
        'singular_name'              => __('Category', 'event'),
        'search_items'               => __('Search Categories', 'event'),
        'popular_items'              => __('Popular Categories', 'event'),
        'all_items'                  => __('All Categories', 'event'),
        'edit_item'                  => __('Edit Category', 'event'),
        'view_item'                  => __('View Category', 'event'),
        'update_item'                => __('Update Category', 'event'),
        'add_new_item'               => __('Add New Category'), 'event',
        'new_item_name'              => __('New Category Name', 'event'),
        'separate_items_with_commas' => __('Separate Categories with commas', 'event'),
        'add_or_remove_items'        => __('Add or remove Categories', 'event'),
        'choose_from_most_used'      => __('Choose from the most used Categories', 'event'),
        'not_found'                  => __('No Categories found.', 'event'),
        'no_terms'                   => __('No Categories', 'event'),
        'items_list_navigation'      => __('Categories list navigation', 'event'),
        'items_list'                 => __('Categories list', 'event'),
        'back_to_items'              => __('&larr; Back to Categories', 'event'),
    );
    $args_category = array(
        'labels'            => $labels_category,
        'show_admin_column' => true,
        'meta_box_cb' => 'post_categories_meta_box',
        'rewrite'           => [
            'slug' => _x('eventscategory', 'URL', 'event')
        ],
    );
    register_taxonomy('events_category', 'events', $args_category);
}

register_activation_hook(__FILE__, 'flush_rewrite_rules');
register_deactivation_hook(__FILE__, 'flush_rewrite_rules');


add_filter('manage_posts_columns', 'posts_columns', 5);
add_action('manage_posts_custom_column', 'posts_custom_columns', 5, 2);


// ajout image column admin
function posts_columns($defaults)
{
    $defaults['riv_post_thumbs'] = __('Image');
    return $defaults;
}

function posts_custom_columns($column_name, $id)
{
    if ($column_name === 'riv_post_thumbs') {
        echo the_post_thumbnail(array(100, 100));
    }
}

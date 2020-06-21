<?php 
/**
 * Plugin Name: Event Plugin
 * Description: Gestion des évènements de Emma Event
 * Version: 0.1
 * Author: Priscilla Roy ITfy
 * Text Domain: event
 * Domain Path: /languages
 */
defined('ABSPATH') or die('rien à voir');

add_action('plugins_loaded', function () {
    load_plugin_textdomain('event', false, basename(dirname(__FILE__)) . '/languages');
});

add_action('init', function () {
    register_post_type('event', [
        'label' => __('Events', 'event'),
        'menu_icon' => 'dashicons-heart',
        'labels' => [
            'name'                     => __('Events', 'event'),
            'singular_name'            => __('Event', 'event'),
            'edit_item'                => __( 'Edit event', 'event'),
            'new_item'                => __( 'New event', 'event'),
            'view_item'                => __( 'View event', 'event'),
            'view_items'                => __( 'View events', 'event'),
            'search_items'                => __( 'Search events', 'event'),
            'not_found'                => __( 'No events found.', 'event'),
            'not_found_in_trash'                => __( 'No events found in Trash', 'event'),
            'all_items'                => __( 'All events', 'event'),
            'archives'                => __( 'Event archive', 'event'),
            'attributes'                => __( 'Event attributes', 'event'),
            'insert_into_item'         => __( 'Insert into Event', 'event' ),
            'uploaded_to_this_item'    => __( 'Uploaded to this Event', 'event' ),
            'filter_items_list'        => __( 'Filter Events list', 'event' ),
            'items_list_navigation'    => __( 'Events list navigation', 'event' ), 
            'items_list'               => __( 'Events list', 'event' ),
            'item_published'           => __( 'Event published.', 'event' ),
            'item_published_privately' => __( 'Event published privately.', 'event' ),
            'item_reverted_to_draft'   => __( 'Event reverted to draft.', 'event' ),
            'item_scheduled'           => __( 'Event scheduled.', 'event' ),
            'item_updated'             => __( 'Event updated.', 'event' ),
        ],
        'has_archive' => true,
        'public' => true,
        'hierarchical' => false,
        'exclude_from_search' => false,
        'show_in_rest' => false,        
        'rewrite'            => [
            'slug' => _x('events', 'URL', 'event')
        ],
        'taxonomies' => ['events'],
        'supports' => ['title', 'author', 'editor', 'excerpt', 'thumbnail']
    ]);
    register_taxonomy('events', 'event', [
        'meta_box_cb' => 'post_categories_meta_box',
        'labels' => [
        'name'                       => __( 'Types', 'event' ),
        'singular_name'              => __( 'Type', 'event' ),
        'search_items'               => __( 'Search Types' , 'event'),
        'popular_items'              => __( 'Popular Types' , 'event'),
        'all_items'                  => __( 'All Types' , 'event'),
        'edit_item'                  => __( 'Edit Type' , 'event'),
        'view_item'                  => __( 'View Type' , 'event'),
        'update_item'                => __( 'Update Type' , 'event'),
        'add_new_item'               => __( 'Add New Type' ), 'event', 
        'new_item_name'              => __( 'New Type Name' , 'event'),
        'separate_items_with_commas' => __( 'Separate Types with commas' , 'event'),
        'add_or_remove_items'        => __( 'Add or remove Types' , 'event'),
        'choose_from_most_used'      => __( 'Choose from the most used Types' , 'event'),
        'not_found'                  => __( 'No Types found.' , 'event'),
        'no_terms'                   => __( 'No Types' , 'event'),
        'items_list_navigation'      => __( 'Types list navigation' , 'event'),
        'items_list'                 => __( 'Types list' , 'event'),
        'back_to_items'              => __( '&larr; Back to Types' , 'event'),
        ],        
        'show_admin_column' => true,        
        'rewrite'            => [
            'slug' => _x('events', 'URL')
        ],
    ]);    
});


register_activation_hook(__FILE__, 'flush_rewrite_rules');
register_deactivation_hook(__FILE__, 'flush_rewrite_rules');


add_filter('manage_posts_columns', 'posts_columns', 5);
add_action('manage_posts_custom_column', 'posts_custom_columns', 5, 2);
 
function posts_columns($defaults){
    $defaults['riv_post_thumbs'] = __('Image');
    return $defaults;
}
 
function posts_custom_columns($column_name, $id){
    if($column_name === 'riv_post_thumbs'){
        echo the_post_thumbnail( array(100,100) ) ;
    }
}
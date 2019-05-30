<?php

function university_post_types()
{
    register_post_type('event', array(
    'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
    'public' => true,
    'labels' => array(
      'name' => 'Events',
      'add_new_item' => __('Add New Event'),
      'edit_item' => 'Edit Event',
      'all_items' => 'All Events',
      'singular_name' => 'Event'
    ),
    'taxonomies'  => array( 'category' ),
    'menu_icon' => 'dashicons-calendar'
  ));
}

add_action('init', 'university_post_types');
//c'est qoui 'init' ?
// pourquoi tu as utilisé `add_action` ici ?

<?php

$services = new CPT(array(
    'post_type_name' => 'Services',
    'singular' => __('Service', 'jhwd'),
    'plural' => __('Services', 'jhwd'),
    'slug' => 'services'
),
	array(
    'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt','page-attributes'),
    'menu_icon' => 'dashicons-testimonial',
    'hierarchical'     => false,
    'capability_type' => 'page'
));

$services->register_taxonomy(array(
    'taxonomy_name' => 'services_tags',
    'singular' => __('Service Tag', 'jhwd'),
    'plural' => __('Services Tags', 'jhwd'),
    'slug' => 'services-tag'
));
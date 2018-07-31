<?php

$portfolio = new CPT(array(
    'post_type_name' => 'Services',
    'singular' => __('Services', 'bootstrapwp'),
    'plural' => __('Services', 'bootstrapwp'),
    'slug' => 'services'
),
	array(
    'supports' => array('title', 'editor', 'thumbnail', 'comments'),
    'menu_icon' => 'dashicons-testimonial'
));

$portfolio->register_taxonomy(array(
    'taxonomy_name' => 'services_tags',
    'singular' => __('Services Tag', 'bootstrapwp'),
    'plural' => __('Services Tags', 'bootstrapwp'),
    'slug' => 'services-tag'
));
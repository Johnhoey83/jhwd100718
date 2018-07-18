<?php

$portfolio = new CPT(array(
    'post_type_name' => 'news',
    'singular' => __('News', 'bootstrapwp'),
    'plural' => __('News', 'bootstrapwp'),
    'slug' => 'news'
),
	array(
    'supports' => array('title', 'editor', 'thumbnail', 'comments'),
    'menu_icon' => 'dashicons-testimonial'
));

$portfolio->register_taxonomy(array(
    'taxonomy_name' => 'news_tags',
    'singular' => __('News Tag', 'bootstrapwp'),
    'plural' => __('News Tags', 'bootstrapwp'),
    'slug' => 'news-tag'
));
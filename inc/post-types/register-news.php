<?php

$news = new CPT(array(
    'post_type_name' => 'news',
    'singular' => __('News', 'jhwd'),
    'plural' => __('News', 'jhwd'),
    'slug' => 'news'
),
	array(
    'supports' => array('title', 'editor', 'thumbnail', 'comments'),
    'menu_icon' => 'dashicons-testimonial'
));

$news->register_taxonomy(array(
    'taxonomy_name' => 'news_tags',
    'singular' => __('News Tag', 'jhwd'),
    'plural' => __('News Tags', 'jhwd'),
    'slug' => 'news-tag'
));
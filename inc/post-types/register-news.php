<?php

$news = new CPT(array(
    'post_type_name' => 'News',
    'singular' => __('News', 'jhwd'),
    'plural' => __('News', 'jhwd'),
    'slug' => 'news'
),
	array(
    'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt','page-attributes', 'category'),
    'menu_icon' => 'dashicons-testimonial',
    'public' => true,
    'rewrite' => array( 'slug' => 'news' ),
    'has_archive' => true
));

$news->register_taxonomy(array(
    'taxonomy_name' => 'news_tags',
    'singular' => __('News Tag', 'jhwd'),
    'plural' => __('News Tags', 'jhwd'),
    'slug' => 'news-tag'
));



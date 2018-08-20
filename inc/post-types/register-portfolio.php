<?php

$portfolio = new CPT(array(
    'post_type_name' => 'portfolio',
    'singular' => __('Portfolio', 'jhwd'),
    'plural' => __('Portfolio', 'jhwd'),
    'slug' => 'portfolio'
),
	array(
    'supports' => array('title', 'editor', 'thumbnail', 'comments'),
    'menu_icon' => 'dashicons-portfolio'
));

$portfolio->register_taxonomy(array(
    'taxonomy_name' => 'portfolio_tags',
    'singular' => __('Portfolio Tag', 'jhwd'),
    'plural' => __('Portfolio Tags', 'jhwd'),
    'slug' => 'portfolio-tag'
));
<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function jhwd_widgets_init() {
  register_sidebar( array(
    'name'          => esc_html__( 'Sidebar', 'jhwd' ),
    'id'            => 'sidebar-1',
    'description'   => esc_html__( 'Add widgets here.', 'jhwd' ),
    'before_widget' => '<section id="%1$s" class="panel panel-default widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<div class="panel-heading"><h3 class="panel-title widget-title">',
    'after_title'   => '</h3></div>',
  ) );
  
  register_sidebar( array(
    'name'          => esc_html__( 'sidebar-homepage', 'jhwd' ),
    'id'            => 'sidebar-homepage',
    'description'   => esc_html__( 'Add widgets here.', 'jhwd' ),
    'before_widget' => '<section id="%1$s" class="panel panel-default widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<div class="panel-heading"><h3 class="panel-title widget-title">',
    'after_title'   => '</h3></div>',
  ) );
}
add_action( 'widgets_init', 'jhwd_widgets_init' );


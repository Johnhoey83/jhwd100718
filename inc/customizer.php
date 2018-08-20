<?php
/**
 * jhwd Theme Customizer.
 *
 * @package jhwd
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function jhwd_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'jhwd_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function jhwd_customize_preview_js() {
	wp_enqueue_script( 'jhwd_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'jhwd_customize_preview_js' );

/**
 * Custom Read More Button
 */
function modify_read_more_link() {

	return '<p><a class="more-link btn btn-default" href="' . get_permalink() . '">Read More</a></p>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );

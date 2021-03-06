<?php
/**
 * jhwd functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package jhwd
 */

if ( ! function_exists( 'jhwd_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function jhwd_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on jhwd, use a find and replace
	 * to change 'jhwd' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'jhwd', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	// Add logo upload in customizer WordPress 4.5+
	add_theme_support( 'custom-logo' );

	// Add post thumbnails to banner
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'jhwd' ),
        'footer-menu' => __( 'Footer Menu', 'jhwd' ),
	) );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// Add custom post types
	add_post_type_support( 'news', 'thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'jhwd' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'jhwd_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'jhwd_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function jhwd_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'jhwd_content_width', 640 );
}
add_action( 'after_setup_theme', 'jhwd_content_width', 0 );

/* *
*@title: Add Class to Next and Previous post_link
*@link: http://extracatchy.net/add-class-next-previous-post_link/
*/
function add_class_next_post_link($html){
    $html = str_replace('<a','<a class="next-nav"',$html );
    return $html;
}
add_filter('next_post_link','add_class_next_post_link',10,1);
function add_class_previous_post_link($html){
    $html = str_replace('<a','<a class="prev-nav" ',$html);
    return $html;
}
add_filter('previous_post_link','add_class_previous_post_link',10,1);

//enqueues our external font awesome stylesheet
function enqueue_our_required_stylesheets(){
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'); 

	wp_enqueue_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'); 
}
add_action('wp_enqueue_scripts','enqueue_our_required_stylesheets');




if ( !function_exists( 'jhwd_the_custom_logo' ) ) :
	/**
	 * Displays the optional custom logo.
	 *
	 * Does nothing if the custom logo is not available.
	 *
	 */
	function jhwd_the_custom_logo() {
		// Try to retrieve the Custom Logo
		$output = '';
		if (function_exists('get_custom_logo'))
			$output = get_custom_logo();
	
		// Nothing in the output: Custom Logo is not supported, or there is no selected logo
		// In both cases we display the site's name
		if (empty($output))
			$output = '<a class="navbar-brand" href="' . esc_url(home_url('/')) . '">' . get_bloginfo('name') . '</a>';
	
		echo $output;
	}
	endif;

/**
 * Editing the Tag Widget
 */
function my_widget_tag_cloud_args( $args ) {
	$args['largest'] = 11;
	$args['smallest'] = 11;
	$args['unit'] = 'px';
	return $args;
  }
  add_filter( 'widget_tag_cloud_args', 'my_widget_tag_cloud_args' );

/**
 * Widgets
 */
require get_template_directory() . '/inc/widgets.php';

/**
* Scripts
*/
require get_template_directory() . '/inc/scripts.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Bootstrap Walker Menu
 */
require get_template_directory() . '/inc/bootstrap-walker.php';

/**
 * Custom Post Types
 */
require get_template_directory() . '/inc/post-types/CPT.php';

//Portfolio Custom Post Type
require get_template_directory() . '/inc/post-types/register-portfolio.php';

//News Custom Post Type
require get_template_directory() . '/inc/post-types/register-news.php';


//Services Custom Post Type
require get_template_directory() . '/inc/post-types/register-services.php';





function register_services() {
    $rewrite = array(
        'slug'                  => 'Services',
        'with_front'            => true,
        'pages'                 => true,
        'feeds'                 => true,
    );
    $args = array(
        'label'                 => 'Services',
        'description'           => 'Services Pages',
        'supports'              => array('page-attributes'),
        'taxonomies'            => array(),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => false,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-testimonial',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'rewrite'               => $rewrite,
    );
    register_post_type( 'services', $args );
}
add_action( 'init', 'register_services' );

function custom_add_google_fonts() {
	wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans', false );
	}
	add_action( 'wp_enqueue_scripts', 'custom_add_google_fonts' );



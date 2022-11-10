<?php

/**
 * Register Custom Navigation Walker
 */
function register_navwalker()
{
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');
/**
 * GHC functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package GHC
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ghc_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on GHC, use a find and replace
		* to change 'ghc' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('ghc', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Main Menu', 'ghc'),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'ghc_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'ghc_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ghc_content_width()
{
	$GLOBALS['content_width'] = apply_filters('ghc_content_width', 640);
}
add_action('after_setup_theme', 'ghc_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ghc_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'ghc'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'ghc'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	// First footer widget area, located in the footer.
	register_sidebar(array(
		'name' => __('logo and contact', 'ghc'),
		'id' => 'first-footer-widget',
		'description' => __('The first footer widget area', 'ghc'),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	));

	// Second Footer Widget Area, located in the footer.
	register_sidebar(array(
		'name' => __('Site Map', 'ghc'),
		'id' => 'second-footer-widget',
		'description' => __('The second footer widget area', 'ghc'),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	));

	// Third Footer Widget Area, located in the footer.
	register_sidebar(array(
		'name' => __('Working Hours', 'ghc'),
		'id' => 'third-footer-widget',
		'description' => __('The third footer widget area', 'ghc'),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	));
}
add_action('widgets_init', 'ghc_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function ghc_scripts()
{
	wp_enqueue_style("bootstrap-min.css", get_template_directory_uri() . "/assets/css/bootstrap.min.css");
	wp_enqueue_style("fontawesome.css", get_template_directory_uri() . "/assets/fontawesome/css/all.min.css");
	wp_enqueue_style('ghc-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('ghc-style', 'rtl', 'replace');
	wp_enqueue_style("theme.css", get_template_directory_uri() . "/assets/css/theme.css");
	wp_enqueue_style("style.css", get_template_directory_uri() . "/assets/css/style.css");
	wp_enqueue_script('jquery-min.js', get_template_directory_uri() . '/assets/js/jquery-3.4.1.slim.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('popper-min.js', get_template_directory_uri() . '/assets/js/popper.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('bootstrap-min.js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('fontawesome.js', get_template_directory_uri() . '/assets/fontawesome/js/all.min.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'ghc_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Ability to add classes to wp_nav_menu LI tags

add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function add_additional_class_on_li($classes, $item, $args)
{
	if (isset($args->add_li_class)) {
		$classes[] = $args->add_li_class;
	}
	return $classes;
}

// A tags

add_filter('nav_menu_link_attributes', 'add_link_atts');

function add_link_atts($atts)
{
	$atts['class'] = "nav-link";
	return $atts;
}


function mytheme_custom_excerpt_length($length)
{
	return 20;
}
add_filter('excerpt_length', 'mytheme_custom_excerpt_length', 999);

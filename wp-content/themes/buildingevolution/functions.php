<?php
/**
 * Building Evolution functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Building_Evolution
 */

if ( ! function_exists( 'buildingevol_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function buildingevol_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Building Evolution, use a find and replace
		 * to change 'buildingevol' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'buildingevol', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'buildingevol' ),
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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'buildingevol_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'buildingevol_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function buildingevol_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'buildingevol_content_width', 640 );
}
add_action( 'after_setup_theme', 'buildingevol_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function buildingevol_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'buildingevol' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'buildingevol' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'buildingevol_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function buildingevol_scripts() {

	// wp_enqueue_script( 'buildingevol-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	
	wp_enqueue_style( 'main', get_template_directory_uri().'/assets/css/style.css', array(), '1.0.0');
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri().'/assets/css/owl.carousel.css', array(), '2.2.1');
	wp_enqueue_style( 'full-page', get_template_directory_uri().'/assets/css/jquery.fullpage.css', array(), '2.9.4');
	wp_enqueue_style( 'be-owl', get_template_directory_uri().'/assets/css/be.owl.css', array(), '1.0.2');
	wp_enqueue_style( 'basic', get_template_directory_uri().'/assets/css/basic.css', array(), '1.0.0');
	
	wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'main', get_template_directory_uri().'/assets/js/main.js', array(), '1.0.0');
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri().'/assets/js/owl.carousel.js', array(), '2.2.1');
	wp_enqueue_script( 'full-page', get_template_directory_uri().'/assets/js/jquery.fullPage.js', array(), '2.9.5');
	wp_enqueue_script( 'scrolloverflow', get_template_directory_uri().'/assets/js/scrolloverflow.js', array(), '0.0.1');
	// wp_enqueue_script( 'basic', get_template_directory_uri().'/assets/css/basic.css', array(), '1.0.0');
	
}
add_action( 'wp_enqueue_scripts', 'buildingevol_scripts' );

/**
 * Change className for custom logo
 */
add_filter( 'get_custom_logo', 'change_logo_class' );

function change_logo_class( $html ) {

    $html = str_replace( 'custom-logo', 'header-logo', $html );
    return $html;
}

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
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


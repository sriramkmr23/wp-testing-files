<?php
/**
* cwt functions and definitions
*
* @link https://developer.wordpress.org/themes/basics/theme-functions/
*
* @package cwt
*/

function cwt_setup() {
    /*
    * Make theme available for translation.
    * Translations can be filed in the /languages/ directory.
    * If you're building a theme based on cwt, use a find and replace
		* to change 'cwt' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'cwt', get_template_directory() . '/languages' );

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

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/


	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'cwt_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

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
add_action( 'after_setup_theme', 'cwt_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
    *
    * Priority 0 to make it available to lower priority callbacks.
    *
    * @global int $content_width
    */

    function cwt_content_width() {
        $GLOBALS[ 'content_width' ] = apply_filters( 'cwt_content_width', 640 );
    }
    add_action( 'after_setup_theme', 'cwt_content_width', 0 );

    /**
    * Register widget area.
    *
    * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
    */

    function cwt_widgets_init() {
        register_sidebar(
            array(
                'name'          => esc_html__( 'Sidebar', 'cwt' ),
                'id'            => 'sidebar-1',
                'description'   => esc_html__( 'Add widgets here.', 'cwt' ),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget'  => '</section>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            )
        );
    }
    add_action( 'widgets_init', 'cwt_widgets_init' );

    /**
    * Option Page.
    */

    if ( function_exists( 'acf_add_options_page' ) ) {

        acf_add_options_page( array(
            'page_title' =>'Top Bar',
            'menu_title' =>'Top Bar',
            'menu_slug' =>'top-bar',
        ) );
		
		acf_add_options_page( array(
            'page_title' =>'Footer',
            'menu_title' =>'Footer',
            'menu_slug' =>'footer',
        ) );

    }

    /**
    * Enqueue scripts and styles.
    */

    function cwt_scripts() {
       
        wp_style_add_data( 'cwt-style', 'rtl', 'replace' );
        wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/style.css', array(), '1.1', 'all' );
		 //wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.1', 'all' );
        wp_enqueue_style( 'bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css', array(), '1.1', 'all' );
		wp_enqueue_style( 'icomoon', get_template_directory_uri().'/fonts/icomoon/style.css', array(), '1.1', 'all' );
        wp_enqueue_style( 'font-awesome', '//use.fontawesome.com/releases/v5.7.2/css/all.css' );
        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }
    }
    add_action( 'wp_enqueue_scripts', 'cwt_scripts' );
	
	
	
function ti_custom_javascript() {
	
wp_enqueue_script( 'jquery-3.3.1', get_template_directory_uri() . '/js/jquery-3.3.1.min.js');
wp_enqueue_script( 'popper', get_template_directory_uri() . '/js/popper.min.js');
wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js');
wp_enqueue_script( 'jquery.sticky', get_template_directory_uri() . '/js/jquery.sticky.js');
wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js');
}

add_action('wp_enqueue_scripts', 'ti_custom_javascript');add_action('init', 'my_remove_editor_from_post_type');
function my_remove_editor_from_post_type() {
remove_post_type_support( 'post', 'editor' );
remove_post_type_support( 'page', 'editor' );

	}





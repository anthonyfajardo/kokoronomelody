<?php
/**
 * kokoronomelody functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kokoronomelody
 */

if ( ! function_exists( 'kokoronomelody_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function kokoronomelody_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on kokoronomelody, use a find and replace
		 * to change 'kokoronomelody' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'kokoronomelody', get_template_directory() . '/languages' );

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
			'primary' => esc_html__( 'Primary', 'kokoronomelody' ),
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
		add_theme_support( 'custom-background', apply_filters( 'kokoronomelody_custom_background_args', array(
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
add_action( 'after_setup_theme', 'kokoronomelody_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function kokoronomelody_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'kokoronomelody_content_width', 640 );
}
add_action( 'after_setup_theme', 'kokoronomelody_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kokoronomelody_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'kokoronomelody' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'kokoronomelody' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'footer-1', 'kokoronomelody' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'kokoronomelody' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'footer-2', 'kokoronomelody' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'kokoronomelody' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'footer-3', 'kokoronomelody' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'kokoronomelody' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'footer-4', 'kokoronomelody' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add widgets here.', 'kokoronomelody' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );	
	register_sidebar( array(
		'name'          => esc_html__( 'footer-wide', 'kokoronomelody' ),
		'id'            => 'footer-wide',
		'description'   => esc_html__( 'Add widgets here.', 'kokoronomelody' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );	
}
add_action( 'widgets_init', 'kokoronomelody_widgets_init' );



/**
 * Enqueue scripts and styles.
 */

function kokoronomelody_styles() {
	
	wp_enqueue_style( 'kokoronomelody-style', get_stylesheet_uri() );

	wp_enqueue_style( ' kokoronomelody-fonts', 'https://fonts.googleapis.com/css?family=Martel+Sans|Martel:300,400,700,900&display=swap');

	wp_enqueue_style( 'font-awesome', 'https://pro.fontawesome.com/releases/v5.11.2/css/all.css', array(), null );

}
add_action( 'wp_enqueue_scripts', 'kokoronomelody_styles');
function kokoronomelody_scripts() {
	
	wp_enqueue_script( 'minified javascript', get_template_directory_uri(). '/scripts.min.js', array('jquery'), '20151215', true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'kokoronomelody_scripts' );

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

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}


/***************************
*
*	CUSTOM FUNCTIONS 
*
***************************/

/* dump() - makes for easy debugging. <?php dump($post); ?> */
function dump($obj) {
	echo "<pre>";
	print_r($obj);
	echo "</pre>";
}

/*
Show featured image as background image
*/

function featured_image_url($currentPost){
	$image_id = get_post_thumbnail_id($currentPost->ID);
	$image_url= wp_get_attachment_url($image_id);
	return $image_url;
}


	
function upcoming_workshops($pages){

	get_template_part('template-parts/upcoming-workshops');
}

function workshops($atts){
	
	upcoming_workshops($atts['pages']);

}add_shortcode('workshops', 'workshops');

function testimonial($attr){
	ob_start();
	get_template_part('template-parts/testimonial');
	return ob_get_clean();
}add_shortcode('getTestimonial', 'testimonial');


add_filter('widget_text', 'do_shortcode');

function recentPosts($attr){
	get_template_part('template-parts/widget-recent-posts');
}add_shortcode('custom_recent_posts', 'recentPosts');

/* 
Remove [ ... ] from the_excerpt
*/
function new_excerpt_more( $more ) {
    return ' ...';
}
add_filter('excerpt_more', 'new_excerpt_more');


/*
*	Change the excerpt length 
*/

function custom_excerpt_length($length){
	return 35;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);



/**
*	Pagination
*/

if(!function_exists('post_pagination')):
	function post_pagination(){
		global $wp_query;

		$big = 999999999; // need an unlikely integer
		$translated = __( 'Page', 'mytextdomain' ); // Supply translatable string

		echo paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages,
		        'before_page_number' => '<span class="screen-reader-text">'.$translated.' </span>'
		) );
	}
endif;



/*
*	CUSTOM SEARCH FORM 
*/

/**
 * Generate custom search form
 *
 * @param string $form Form HTML.
 * @return string Modified form HTML.
 */
function wpdocs_my_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
    <div class="search-wrapper"><label class="screen-reader-text" for="s">' . __( 'Search for:' ) . '</label>
    <input type="text" value="' . get_search_query() . '" name="s" id="s" />
    <input type="submit" id="searchsubmit" value="'. esc_attr__( 'Search' ) .'" />
    </div>
    </form>';
 
    return $form;
}
add_filter( 'get_search_form', 'wpdocs_my_search_form' );
<?php
/**
 * AnalogNXT functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package AnalogNXT
 */

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Enqueue Font Awesome
 */
function enqueue_font_awesome() {
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css',
        array(),
        '6.5.1'
    );
}
add_action('wp_enqueue_scripts', 'enqueue_font_awesome');

/**
 * Theme setup
 */
function analognxt_setup() {
	load_theme_textdomain( 'analognxt', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'analognxt' ),
		)
	);

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

	add_theme_support(
		'custom-background',
		apply_filters(
			'analognxt_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	add_theme_support( 'customize-selective-refresh-widgets' );

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
add_action( 'after_setup_theme', 'analognxt_setup' );

/**
 * Content width
 */
function analognxt_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'analognxt_content_width', 640 );
}
add_action( 'after_setup_theme', 'analognxt_content_width', 0 );

/**
 * Widgets
 */
function analognxt_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'analognxt' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'analognxt' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'analognxt_widgets_init' );

/**
 * Enqueue global scripts and styles
 */
function analognxt_global_assets() {
    $theme_dir = get_template_directory_uri() . '/analogNXTTheme';

    // CSS
    wp_enqueue_style( 'analognxt-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_style_add_data( 'analognxt-style', 'rtl', 'replace' );

    wp_enqueue_style( 'analognxt-webflow', $theme_dir . '/css/analognxtcss.min.css', array(), '1.0.0' );
    wp_enqueue_style( 'analognxt-swiper', $theme_dir . '/css/swiper-bundle.min.css', array(), '8.4.7' );
    wp_enqueue_style( 'analognxt-splitting', $theme_dir . '/css/splitting.css', array(), '1.0.0' );
    wp_enqueue_style( 'analognxt-splitting-cells', $theme_dir . '/css/splitting-cells.css', array(), '1.0.0' );

    // JS
    wp_enqueue_script( 'jquery' );

    // GSAP & plugins
    wp_enqueue_script( 'analognxt-gsap', $theme_dir . '/js/gsap.min.js', array(), '3.0.0', true );
    wp_enqueue_script( 'analognxt-scrolltrigger', $theme_dir . '/js/ScrollTrigger.min.js', array( 'analognxt-gsap' ), '3.0.0', true );
    wp_enqueue_script( 'analognxt-custom-ease', $theme_dir . '/js/CustomEase.min.js', array( 'analognxt-gsap' ), '3.0.0', true );
    wp_enqueue_script( 'analognxt-draggable', $theme_dir . '/js/Draggable.min.js', array( 'analognxt-gsap' ), '3.0.0', true );
    wp_enqueue_script( 'analognxt-flip', $theme_dir . '/js/Flip.min.js', array( 'analognxt-gsap' ), '3.0.0', true );
    wp_enqueue_script( 'analognxt-inertia', $theme_dir . '/js/InertiaPlugin.min.js', array( 'analognxt-gsap' ), '3.0.0', true );

    wp_enqueue_script( 'analognxt-lenis', $theme_dir . '/js/lenis.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'analognxt-splitting', $theme_dir . '/js/splitting.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'analognxt-swiper', $theme_dir . '/js/swiper-bundle.min.js', array(), '8.4.7', true );
    wp_enqueue_script( 'analognxt-lottie', $theme_dir . '/js/lottie.min.js', array(), '5.0.0', true );
    wp_enqueue_script( 'analognxt-barba', $theme_dir . '/js/barba.umd.min.js', array(), '2.0.0', true );
    // attributes.js (Finsweet) loaded from CDN — local dist/chunk-*.js files are missing build artifacts
    wp_enqueue_script( 'analognxt-attributes', 'https://cdn.jsdelivr.net/npm/@finsweet/attributes@2/attributes.js', array(), '2', true );
    wp_enqueue_script( 'analognxt-geo', $theme_dir . '/js/geo.js', array(), '1.0.0', true );
    wp_enqueue_script( 'analognxt-main', $theme_dir . '/js/main.js', array( 'analognxt-gsap', 'analognxt-lenis', 'analognxt-barba' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'analognxt_global_assets' );

/**
 * Load attributes.js as an ES module (it uses import statements).
 * Also suppress GSAP null-target warnings that occur during Barba page transitions.
 */
add_filter( 'script_loader_tag', function( $tag, $handle ) {
    if ( 'analognxt-attributes' === $handle ) {
        return str_replace( ' src=', ' type="module" src=', $tag );
    }
    return $tag;
}, 10, 2 );

/**
 * Add favicon link and GSAP null-target guard.
 */
add_action( 'wp_head', function() {
    $favicon_url = get_template_directory_uri() . '/wp-content/uploads/2026/02/AnalgNXT-Logo-Icon-Transparent-Black-BG-PNG.png';
    echo '<link rel="icon" type="image/jpeg" href="' . esc_url( $favicon_url ) . '">' . "\n";
    echo '<link rel="shortcut icon" type="image/jpeg" href="' . esc_url( $favicon_url ) . '">' . "\n";
    // Guard GSAP against null targets thrown by Barba page transitions
    echo '<script>window.__gsapNullTargetSuppressed=true;document.addEventListener("DOMContentLoaded",function(){if(window.gsap){gsap.config({nullTargetWarn:false});}});</script>' . "\n";
}, 1 );

/**
 * Define the geoip callback before geo.js executes.
 */
add_action( 'wp_head', function() {
    echo '<script>window.geoip = window.geoip || function(data){ window.geoipData = data; };</script>' . "\n";
} );
/**
 * Enqueue GSAP and tsparticles scripts.
 */
function enqueue_custom_scripts() {
    // GSAP core
    wp_enqueue_script(
        'gsap',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js',
        array(),
        '3.13.0',
        true // Load in footer
    );

    // GSAP Observer (depends on GSAP)
    wp_enqueue_script(
        'gsap-observer',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/Observer.min.js',
        array('gsap'),
        '3.13.0',
        true
    );

    // GSAP SplitText (depends on GSAP)
    wp_enqueue_script(
        'gsap-splittext',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/SplitText.min.js',
        array('gsap'),
        '3.13.0',
        true
    );

    // tsparticles bundle
    wp_enqueue_script(
        'tsparticles',
        'https://cdn.jsdelivr.net/npm/tsparticles@2/tsparticles.bundle.min.js',
        array(), // No dependencies
        '2.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

/**
 * Enqueue Google Fonts
 */
function mytheme_enqueue_fonts() {
    wp_enqueue_style(
        'google-montserrat',
        'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap',
        array(),
        null
    );
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_fonts');

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
 * Homepage helper functions.
 */
require get_template_directory() . '/inc/homepage-helpers.php';

/**
 * ACF Blocks registration
 */
require get_template_directory() . '/inc/blocks.php';

/**
 * ACF Field Groups
 */
require get_template_directory() . '/inc/acf-field-groups.php';

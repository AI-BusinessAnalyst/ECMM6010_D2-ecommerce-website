<?php

if (!function_exists('medispa_setup')):     
	function medispa_setup() {
		load_theme_textdomain('medispa', get_template_directory() . '/languages');
		add_theme_support('automatic-feed-links');         
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails'); 
		register_nav_menus(array('primary' => esc_html__('Primary', 'medispa'), ));
		add_theme_support('html5', array( 
			'search-form',
			'comment-form',
			'comment-list', 
			'gallery', 
			'caption',
			));
		add_theme_support ('custom-logo',array(
			'flex-height' => true,
			'flex- width'  => true,             
			'header-text' => array('site-title', 'site- description'),
			));         
		add_theme_support('woocommerce');
		add_image_size('medispa-825x350-crop', '825', '350', true); 
		add_image_size('medispa-285x230-crop', '285', '230', true);
	}
endif;
add_action('after_setup_theme', 'medispa_setup');

function medispa_content_width() {
	$GLOBALS['content_width'] = apply_filters('medispa_content_width', 640);
}
add_action('after_setup_theme', 'medispa_content_width', 0);

function medispa_widgets_init() {
	register_sidebar(array(
		'name'          => esc_html__('Sidebar', 'medispa'),
		'id'            => 'sidebar',
		'description'   => esc_html__('Sidebar Widget Area', 'medispa'),
		'before_widget' => '<div class="row widget sidebar-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));

		register_sidebar(array(
		'name'          => esc_html__('Footer Widget Area', 'medispa'),
		'id'            => 'footer-widget-area',
		'description'   => esc_html__('footer widget area', 'medispa'),
		'before_widget' => '<div class="col-md-3 col-sm-6 footer_widget widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="row widget_heading"><h2>',
		'after_title'   => '</h2></div>',
	));

}
add_action('widgets_init', 'medispa_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function medispa_scripts() {

	wp_enqueue_style('medispa-google-fonts', 'https://fonts.googleapis.com/css?family=Ubuntu');
        wp_enqueue_style('medispa-google-fonts1', 'https://fonts.googleapis.com/css?family=Great+Vibes');
	wp_enqueue_style('font-awesome', get_template_directory_uri() . "/css/font-awesome.min.css");
	wp_enqueue_style('animate', get_template_directory_uri() . "/css/animate.min.css");
	wp_enqueue_style('bootstrap', get_template_directory_uri() . "/css/bootstrap.min.css");
	wp_enqueue_style('simplelightbox', get_template_directory_uri() . "/css/simplelightbox.min.css");
	wp_enqueue_style('swiper', get_template_directory_uri() . "/css/swiper.min.css");
	wp_enqueue_style('medispa-style', get_stylesheet_uri());
        wp_enqueue_style('medispa-media', get_template_directory_uri() . "/css/media-screen.css");
       

	if (is_singular() && comments_open() && get_option('thread_comments')) {wp_enqueue_script('comment-reply');}
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '20120206', true);
	wp_enqueue_script('wow', get_template_directory_uri() . '/js/wow.min.js', array('jquery'), '20120206', true);
	wp_enqueue_script('simple-lightbox', get_template_directory_uri() . '/js/simple-lightbox.min.js', array('jquery'), '20120206', true);
	wp_enqueue_script('swiper', get_template_directory_uri() . '/js/swiper.min.js', array('jquery'), '20120206', true);
	wp_enqueue_script('medispa-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true);
	wp_enqueue_script('medispa-custom-script', get_template_directory_uri() . '/js/custom-script.js', array('jquery'), '20120206', true);

	wp_enqueue_script('respond', get_template_directory_uri() . '/js/respond.min.js');
	wp_script_add_data('respond', 'conditional', 'lt IE 9');

	wp_enqueue_script('html5shiv', get_template_directory_uri() . '/js/html5shiv.js');
	wp_script_add_data('html5shiv', 'conditional', 'lt IE 9');

}
add_action('wp_enqueue_scripts', 'medispa_scripts');

function medispa_custmizer_style() {
	wp_enqueue_style('medispa-customizer-css', get_template_directory_uri() . '/css/customizer-style.css');
}
add_action('customize_controls_print_styles', 'medispa_custmizer_style');

require get_template_directory() . '/inc/themefarmer-customizer.php';
require get_template_directory() . '/inc/themefarmer-sanitize-cb.php';
require get_template_directory() . '/inc/themefarmer-variables.php';
require get_template_directory() . '/inc/themefarmer-walker.php';
require get_template_directory() . '/inc/themefarmer-functions.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/extras.php';
require get_template_directory() . '/inc/jetpack.php';

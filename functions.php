<?php  

add_action('after_setup_theme', 'inezit_setup');
function inezit_setup()
{
	add_theme_support('menus');
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
	// add_theme_support('custom-fields');

	register_nav_menus(array(
		'primary' => 'Primary Menu	'
	));
}
add_action('wp_enqueue_scripts','inezit_scripts');
function inezit_scripts(){
	// Theme stylesheet.
	wp_enqueue_style('inezit-style',get_template_directory_uri() . '/css/bootstrap.css');
	// Lib
	wp_enqueue_style('inezit-animation-css', get_template_directory_uri() . '/assets/libs/animate/animate.css');
	wp_enqueue_style('inezit-google-font', 'https://fonts.googleapis.com/css?family=Lato:400,400italic,700,900,300');
	wp_enqueue_style('inezit-glypher-css', get_template_directory_uri() . '/assets/font/font-icon/font-svg/css/Glyphter.css');
	wp_enqueue_style('inezit-material-icons-css', 'https://fonts.googleapis.com/icon?family=Material+Icons');
	wp_enqueue_style('inezit-font-awesome-css', get_template_directory_uri() . '/assets/font/font-icon/font-awesome-4.4.0/css/font-awesome.css');
	// Scripts
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js',array(),'x.x.x',true);
	wp_enqueue_script('inezit-smoothscroll-js', get_template_directory_uri() . '/assets/libs/smooth-scroll/jquery-smoothscroll.js',array(),'x.x.x',true);
	wp_enqueue_script('inezit-appear-js', get_template_directory_uri() . '/assets/libs/appear/jquery.appear.js',array(),'x.x.x',true);
	wp_enqueue_script('inezit-wow-js', get_template_directory_uri() . '/assets/libs/wow-js/wow.min.js',array(),'x.x.x',true);
	wp_enqueue_script('inezit-selectbox-js', get_template_directory_uri() . '/assets/libs/selectbox/js/jquery.selectbox-0.2.min.js',array(),'x.x.x',true);
	wp_enqueue_script('inezit-main-js', get_template_directory_uri() . '/assets/js/main.js',array(),'x.x.x',true);
	wp_enqueue_script('inezit-jquery-js', get_template_directory_uri() . '/bower_components/jquery/dist/jquery.min.js',array(),'x.x.x',false);
	wp_enqueue_script('inezit-cookie-js', get_template_directory_uri() . '/assets/libs/js-cookie/js.cookie.js',array(),'x.x.x',false);
}


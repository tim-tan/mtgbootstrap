<?php



function theme_styles() {

	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css');

	wp_enqueue_style('main-css', get_template_directory_uri() . '/style.css');

	wp_enqueue_style('bootstrap-multiselect-css', get_template_directory_uri() . '/css/bootstrap-multiselect.css');

	wp_enqueue_style('font-awesome-css', get_template_directory_uri() . '/fonts/font-awesome/css/font-awesome.css');

}

add_action('wp_enqueue_scripts' , 'theme_styles');

function theme_js() {

	global $wp_scripts;

	wp_register_script( 'html5-shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false);
	wp_register_script('respond-js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false);

	$wp_scripts->add_data('html5-shiv', 'conditional', 'lt IE 9');
	$wp_scripts->add_data('respond-js', 'conditional', 'lt IE 9');

	wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true);
	wp_enqueue_script('bootstrap_multiselect_js', get_template_directory_uri() . '/js/bootstrap-multiselect.js', array('jquery'), '', true);
	wp_enqueue_script('jquery_easing_js', get_template_directory_uri() . '/js/jquery.easing.min.js', array('jquery'), '', true);
	wp_enqueue_script('scrolling_nav_js', get_template_directory_uri() . '/js/scrolling-nav.js', array('jquery'), '', true);	
}

add_action('wp_enqueue_scripts' , 'theme_js');


//add_theme_support('menus');

//function register_theme_menus() {
	
//	register_nav_menus(
       		
//		array(
//		'header-menu' => _( 'Header Menu')
//             )
//	);
//}
//add_action('init', 'register_theme_menus');
?>

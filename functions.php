<?php
// CSS
function franko_add_styles() {
  wp_enqueue_style('style-css-1', get_template_directory_uri() ."/css/bootstrap.min.css", array(), '1.0.0', 'all');
  wp_enqueue_style('style-css-2', get_template_directory_uri() ."/css/owl.carousel.min.css", array(), '1.0.0', 'all');
  wp_enqueue_style('style-css-3', get_template_directory_uri() ."/css/owl.theme.default.min.css", array(), '1.0.0', 'all');
  wp_enqueue_style('style-css-4', get_template_directory_uri() ."/css/jquery.mCustomScrollbar.min.css", array(), '1.0.0', 'all');
  wp_enqueue_style('style-css-5', get_template_directory_uri() ."/css/style.css", array(), '1.0.0', 'all');  
}
add_action('wp_enqueue_scripts', 'franko_add_styles');

// Scripts
function franko_add_scripts () {
  wp_enqueue_script('js-1', get_template_directory_uri() . '/js/jquery.min.js', array(), '1.0', true);
  wp_enqueue_script('js-2', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0', true);
  wp_enqueue_script('js-3', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '1.0', true);
  wp_enqueue_script('js-4', get_template_directory_uri() . '/js/grids.min.js', array(), '1.0', true);
  wp_enqueue_script('js-5', get_template_directory_uri() . '/js/jquery.mCustomScrollbar.concat.min.js', array(), '1.0', true);
  wp_enqueue_script('js-6', 'http://maps.googleapis.com/maps/api/js?key=AIzaSyCMr0R_b0zz43M1N_bwnpq_zGl_m813eS4', array(), '1.0', true);

  wp_enqueue_script('js-7', get_template_directory_uri() . '/js/main.js', array(), '1.0', true);

}
add_action('wp_enqueue_scripts', 'franko_add_scripts');

// To make options to the theme settingigs
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
	acf_add_options_sub_page('Header');
	acf_add_options_sub_page('Footer');	
}

// Suport menus
add_theme_support('menus');

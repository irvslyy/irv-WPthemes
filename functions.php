<?php 

function load_file()
{
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_script('jquery-script', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '',true);
	wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '',true);
}
add_action('wp_enqueue_scripts', 'load_file');


function new_excerpt_more($more)
{
    return '....';
}

add_filter('excerpt_more', 'new_excerpt_more');

// function get_except_length()
// {
// 	return 5;
// }
// function return_excerpt_text()
// {
// 	return'';
// }
// add_filter('excerpt_more','return_excerpt_text');
// add_filter('excerpt_length', 'get_excerpt_length');

require get_template_directory() . '/bootstrap-walker.php';
 ?>
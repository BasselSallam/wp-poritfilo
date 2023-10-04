<?php 
function wpbootstrap_enqueue_styles() {
wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css' );
}
wp_enqueue_style('university_main_styles', get_theme_file_uri('/build/style-index.css'));

add_action('wp_enqueue_scripts', 'wpbootstrap_enqueue_styles');

function custom_css_enqueue()
{
  wp_enqueue_style('university_extra_styles', get_theme_file_uri('/css/main.css'));
}

add_action('wp_enqueue_scripts', 'custom_css_enqueue');
add_theme_support('post-thumbnails');

?>
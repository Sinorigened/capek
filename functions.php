<?php
if (!defined('ABSPATH')) exit;

function capek_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'capek_setup');

function capek_assets() {
  wp_enqueue_style('capek-fonts', 'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;1,300;1,400&family=DM+Sans:wght@300;400;500&display=swap', [], null);
  wp_enqueue_style('capek', get_stylesheet_uri(), ['capek-fonts'], '1.0.0');
}
add_action('wp_enqueue_scripts', 'capek_assets');

function capek_img($file) {
  return esc_url(get_template_directory_uri() . '/assets/' . $file);
}

function capek_home() {
  return esc_url(home_url('/'));
}

function capek_concierge($hash = '') {
  return esc_url(home_url('/concierge/' . $hash));
}

function capek_seed_page() {
  if (get_page_by_path('concierge')) return;
  wp_insert_post([
    'post_title' => 'Concierge',
    'post_name' => 'concierge',
    'post_status' => 'publish',
    'post_type' => 'page',
    'post_content' => '',
  ]);
}
add_action('after_switch_theme', 'capek_seed_page');

add_filter('show_admin_bar', '__return_false');

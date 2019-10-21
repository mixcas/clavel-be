<?php
// Enqueue
function scripts_and_styles_method() {
  $templateuri = get_template_directory_uri();
  $javascriptMain = $templateuri . '/dist/js/main.min.js';
  $is_admin = current_user_can('administrator') ? 1 : 0;
  $javascriptVars = array(
    'siteUrl' => home_url(),
    'themeUrl' => get_template_directory_uri(),
    'isAdmin' => $is_admin,
  );
  wp_register_script('javascript-main', $javascriptMain);
  wp_localize_script('javascript-main', 'WP', $javascriptVars);
  wp_enqueue_script('javascript-main', $javascriptMain, '', '', true);
  // Enqueue style
  wp_enqueue_style( 'style-site', get_stylesheet_directory_uri() . '/dist/css/main.min.css' );
  // dashicons for admin
  if (is_admin()) {
    wp_enqueue_style( 'dashicons' );
  }
}
add_action('wp_enqueue_scripts', 'scripts_and_styles_method');

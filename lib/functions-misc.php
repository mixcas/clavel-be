<?php
// Disable that freaking admin bar
add_filter('show_admin_bar', '__return_false');

// Turn off version in meta
function no_generator() { return ''; }
add_filter( 'the_generator', 'no_generator' );
// Show thumbnails in admin lists
add_filter('manage_posts_columns', 'new_add_post_thumbnail_column');
function new_add_post_thumbnail_column($cols) {
	$cols['new_post_thumb'] = __('Thumbnail');
	return $cols;
}
add_action('manage_posts_custom_column', 'new_display_post_thumbnail_column', 5, 2);
function new_display_post_thumbnail_column($col, $id) {
	if ($col === 'new_post_thumb' && function_exists('the_post_thumbnail')) {
		echo the_post_thumbnail( 'admin-thumb' );
	}
}
// remove automatic <a> links from images in blog
function wpb_imagelink_setup() {
	$image_set = get_option( 'image_default_link_type' );
	if ($image_set !== 'none') {
		update_option('image_default_link_type', 'none');
	}
}
add_action('admin_init', 'wpb_imagelink_setup', 10);

function check_category_exists( $cat_name, $parent = null ) {
  $id = term_exists( $cat_name, 'category', $parent );
  if ( is_array( $id ) ) {
    $id = $id['term_id'];
  }
  return $id;
}
function get_category_link_by_slug($slug) {
  if (check_category_exists($slug)) {
    $category = get_category_by_slug($slug);
    if ( ! is_object( $category ) ) {
      $category = (int) $category;
    }
    echo get_term_link( $category );
  }

  echo '#';
}


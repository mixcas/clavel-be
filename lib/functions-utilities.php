<?php
// get ID of page by slug
function get_id_by_slug($page_slug) {
	$page = get_page_by_path($page_slug);
	if ($page) {
		return $page->ID;
	} else {
		return null;
	}
}
// is_single for custom post type
function is_single_type($type, $post) {
	if (!$post || !is_single()) {
		return false;
	} else if (get_post_type($post->ID) === $type) {
		return true;
	} else {
		return false;
	}
}
// print var in <pre> tags
function pr($var) {
	echo '<pre>';
	print_r($var);
	echo '</pre>';
}
// Debug page and template request
function debug_page_request() {
	global $wp, $template;
	define("D4P_EOL", "\r\n");
	echo '<!-- Request: ';
	echo empty($wp->request) ? "None" : esc_html($wp->request);
	echo ' -->'.D4P_EOL;
	echo '<!-- Matched Rewrite Rule: ';
	echo empty($wp->matched_rule) ? None : esc_html($wp->matched_rule);
	echo ' -->'.D4P_EOL;
	echo '<!-- Matched Rewrite Query: ';
	echo empty($wp->matched_query) ? "None" : esc_html($wp->matched_query);
	echo ' -->'.D4P_EOL;
	echo '<!-- Loaded Template: ';
	echo basename($template);
	echo ' -->'.D4P_EOL;
}

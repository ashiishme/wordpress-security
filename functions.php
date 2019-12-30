<?php 

	/* 
	** @package makzine
	** functions
	*/

require ( get_template_directory() . '/inc/enqueue.php' );
require ( get_template_directory() . '/inc/theme-support.php' );
require ( get_template_directory() . '/inc/walker.php' );
require ( get_template_directory() . '/inc/section-posts-template.php' );
require ( get_template_directory() . '/inc/section-posts-template-1.php' );
require ( get_template_directory() . '/inc/section-posts-template-2.php' );
require ( get_template_directory() . '/inc/section-posts-template-3.php' );
require ( get_template_directory() . '/inc/section-posts-template-4.php' );
require ( get_template_directory() . '/inc/sidebar-popular-posts.php' );
require ( get_template_directory() . '/inc/sidebar-recent-posts.php' );
require ( get_template_directory() . '/inc/makzine-footer-social-icons.php' );
require ( get_template_directory() . '/inc/makzine-header-social-icons.php' );
require ( get_template_directory() . '/inc/makzine-about-us.php' );


// SECURITY WORDPRESS

function wha_hide_wp_version() {
	return '';
}
add_filter('the_generator', 'wha_hide_wp_version');

function wha_disable_rest_api( $result ) { 
	if (!is_user_logged_in()) { 
		return new WP_Error('rest_not_logged_in', 'You are not currently logged in.', array('status' => 401)); 
	} 
	return $result; 
}
add_filter('rest_authentication_errors', 'wha_disable_rest_api');

<?php
/**
 * @package WordPress
 * @subpackage Kleo
 * @author SeventhQueen <themesupport@seventhqueen.com>
 * @since Kleo 1.0
 */

/**
 * Kleo Child Theme Functions
 * Add custom code below
*/ 
/* add_action('rtmedia_init','rtmedia_get_author_name');
 function rtmedia_get_author_name( $user_id ) {
	if ( function_exists( 'bp_core_get_user_displayname' ) ) {
		return bp_core_get_user_displayname( $user_id );
	} else {
		$user = get_userdata( $user_id );

		if ( $user ) {
			return $user->user_login;
		}
	}

} */
 
add_action('bp_init','change_media_tab_position', 12);
function change_media_tab_position(){
global $bp;
if( isset ($bp->bp_nav['media'])){
$bp->bp_nav['media']['position'] = 10;
}
}
register_sidebar( array(
            'name' => __( 'gallery widget', 'kleo_framework' ),
            'id' => 'gallery-sidebar',
            'description' => __( 'Gallery Widget', 'kleo_framework' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        ) );

/* $image_type_labels = array(
'name' => _x('User images', 'post type general name')
);

$image_type_args = array(
'labels' => $image_type_labels,
'public' => true,
'query_var' => true,
'rewrite' => true,
'capability_type' => 'post',
'has_archive' => true, 
'hierarchical' => false
); 

register_post_type('user_images', $image_type_args); 
 */
 
 
 
 /* function rtmedia_get_author_name( $user_id ) {
	if ( function_exists( 'bp_core_get_user_displayname' ) ) {
		return bp_core_get_user_displayname( $user_id );
	} else {
		$user = get_userdata( $user_id );

		if ( $user ) {
			return $user->user_login;
		}
	}

} */
 
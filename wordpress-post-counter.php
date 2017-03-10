<?php
/*
* Plugin Name: Wordpress Post Counter
* Description: Provides a shortcode to display the total number of posts on a Wordpress blog.
* Version: 1.0
* Author: CJ Trowbridge
* Author URI: https://github.com/wordpress-post-counter
*/

add_shortcode('post-counter', 'wpPostCounter');

function wpPostCounter(){
	$wpPostCount = $wpdb->get_row( "SELECT count(*) as 'Count' FROM $wpdb->posts", ARRAY_A );
	echo $wpPostCount[0]['Count'];
}

<?php
/*
* Plugin Name: Wordpress Post Counter
* Description: Provides a shortcode to display the total number of posts on a Wordpress blog.
* Version: 1.0
* Author: CJ Trowbridge
* Author URI: https://github.com/wordpress-post-counter
*/

add_shortcode('post-counter', 'wpPostCounter');
add_shortcode('post-counter-no-attribution', 'wpPostCounterNoAttribution');

function wpPostCounterNoAttribution(){
	$wpPostCount = $wpdb->get_row( "SELECT count(*) as 'Count' FROM $wpdb->posts", ARRAY_A );
	echo '<span class="wordpress-post-counter">'.$wpPostCount[0]['Count'].'</span>';
}
function wpPostCounter(){
	$wpPostCount = $wpdb->get_row( "SELECT count(*) as 'Count' FROM $wpdb->posts", ARRAY_A );
	echo '<span class="wordpress-post-counter"><a href="https://github.com/cjtrowbridge/wordpress-post-counter" target="_blank" class="wordpress-post-counter-link">'.$wpPostCount[0]['Count'].'</a></span>';
}


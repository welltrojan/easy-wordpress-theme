<?php

class Admin
{
	public function __construct()
	{

		// Theme Support
		// Specific theme support thumbnail for pages and posts
		add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );

		add_filter("upload_mimes", array($this, 'cc_mime_types'));
	}
	
	// Allow upload SVG Files to Wordpress
	function cc_mime_types($mimes) {
		$mimes['svg'] = 'image/svg+xml';
		return $mimes;
	}

}

new Admin();
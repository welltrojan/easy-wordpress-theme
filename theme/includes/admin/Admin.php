<?php

class AdminClass
{
	public function __construct()
	{

		// Theme Support
		// Specific theme support thumbnail for pages and posts
		add_theme_support( 'post-thumbnails' );
		// Theme support for Woocommerce
		add_theme_support( 'woocommerce' );
		add_theme_support( 'wc-product-gallery-slider' );
		
	}

}

new AdminClass();
<?php

//die('hello !');

/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);


require( dirname( __FILE__ ) . '/../config/wordpress.php' );

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/site/wp-blog-header.php' );

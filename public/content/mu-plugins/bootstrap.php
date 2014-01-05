<?php

/**
 * Plugin Name: App Bootstrap
 * Depends: Classes
 */

add_action('plugins_loaded', function () {
		
	$recipesUser = new WPPlugins\WPExtend\ContentType(
		'recipe-user', 
		array(
	    	'singular_name' => "Recette",
	    	'supports' => array('editor', 'title', 'revisions', 'custom-fields', 'thumbnail')
		),
		array(
		'singular_name' => "Recette Membre",
	    'plural_name' => "Recettes Membre",
		)
	);

	$recipesFeed = new WPPlugins\WPExtend\ContentType(
		'recipe-feed', 
		array(
	    	'singular_name' => "Recette",
	    	'supports' => array('editor', 'title', 'revisions', 'custom-fields', 'thumbnail')
		),
		array(
		'singular_name' => "Recette RSS",
	    'plural_name' => "Recettes RSS",
		)
	);

	$recipesChef = new WPPlugins\WPExtend\ContentType(
		'recipe-chef', 
		array(
	    	'singular_name' => "Recette",
	    	'supports' => array('editor', 'title', 'revisions', 'custom-fields', 'thumbnail')
		),
		array(
		'singular_name' => "Recette Chef",
	    'plural_name' => "Recettes Chef",
		)
	);
});
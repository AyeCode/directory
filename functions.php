<?php


// Pattern filters
require_once 'includes/pattern-filters.php';
require_once 'includes/pattern-filters/menu.php';
require_once 'includes/pattern-filters/header.php';
require_once 'includes/pattern-filters/footer.php';
require_once 'includes/pattern-filters/hero.php';
require_once 'includes/pattern-filters/content.php';

// Register patterns
require_once 'includes/register-patterns.php';

// Downgrade functions
require_once 'includes/downgrade-functions.php';

/**
 * Loads the translation files for WordPress.
 *
 * @since 3.0.0
 */
function directory_theme_setup()
{
	load_child_theme_textdomain( 'directory', get_stylesheet_directory() . '/languages' );

	if ( is_admin() ) {
		// Theme admin stuff
		require_once 'includes/class-blockstrap-admin-child.php';
	}
}

add_action('after_setup_theme', 'directory_theme_setup');

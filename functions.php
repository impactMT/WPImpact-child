<?php
/* Impact functions and definitions */
function impactchild_setup() {
	// Register Theme Menus
	register_nav_menu( 'secondary', __( 'Secondary Menu', 'impactmt' ) );
	// Add Image Sizes
	add_image_size( 'image-reference', 500, 300 );
}
add_action( 'after_setup_theme', 'impactchild_setup' );

/* Enqueues child theme scripts for front-end */
function impactmt_child_scripts() {
		
	// Load jQuery and Theme Scripts - ADDITIONAL SCRIPTS ADDED HERE
	if (!is_admin());
	wp_enqueue_script( 'impactmtchild-theme', get_stylesheet_directory_uri(). '/js/theme.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'impactmt_child_scripts' );

/* ---------------------------------------------------------------------- */
/*	Load Custom Functions in Functions Folder
/* ---------------------------------------------------------------------- */

/* Admin */
include( get_stylesheet_directory(). '/functions/admin.php' );

/* Admin Welcome */
include( get_stylesheet_directory(). '/functions/admin-welcome.php' );

/* Registers Widget Areas */
include( get_stylesheet_directory(). '/functions/widget-area.php' );

/* Contextual Help Menu */
//include( get_stylesheet_directory(). '/functions/admin-help.php' );

/* Taxonomies */
//include( get_stylesheet_directory(). '/functions/custom-taxonomies.php' );

/* Post Types */
//include( get_stylesheet_directory(). '/functions/custom-post-types.php' );

/* Meta Boxes */
include( get_stylesheet_directory(). '/functions/custom-metabox.php' );

/* Meta Relative Date Info */
include( get_stylesheet_directory(). '/functions/meta-information.php' ); 


/* ---------------------------------------------------------------------- */
/*	SCHNOZWEB SILVER - Load Custom Functions in Functions Folder
/* ---------------------------------------------------------------------- */

/* NEWS - hide for this package */
// Removes 'News'
//function remove_news() {
//	remove_menu_page('edit.php');
//}
//add_action( 'admin_menu', 'remove_news' );


/* Taxonomies */
//include( TEMPLATEPATH  . '/functions/schnozWeb/silver/custom-taxonomies.php' );

/* Post Types */
//include( TEMPLATEPATH  . '/functions/schnozWeb/silver/custom-post-types.php' );

/* Meta Boxes */
//include( TEMPLATEPATH  . '/functions/schnozWeb/silver/custom-metabox.php' );

/* ---------------------------------------------------------------------- */
/*	SCHNOZWEB GOLD - Load Custom Functions in Functions Folder
/* ---------------------------------------------------------------------- */

/* NEWS - hide for this package */
// Removes 'News'
//function remove_news() {
//	remove_menu_page('edit.php');
//}
//add_action( 'admin_menu', 'remove_news' );


/* Taxonomies */
//include( TEMPLATEPATH  . '/functions/schnozWeb/gold/custom-taxonomies.php' );

/* Post Types */
//include( TEMPLATEPATH  . '/functions/schnozWeb/gold/custom-post-types.php' );

/* Meta Boxes */
//include( TEMPLATEPATH  . '/functions/schnozWeb/gold/custom-metabox.php' );

// Enqueue Admin Scripts
//wp_enqueue_script( 'term-metabox', get_template_directory_uri() . '/functions/schnozWeb/gold/js/term-metabox.js', array(), '1.0', true );


/* ---------------------------------------------------------------------- */
/*	SCHNOZWEB PLATINUM - Load Custom Functions in Functions Folder
/* ---------------------------------------------------------------------- */

/* Taxonomies */
include( TEMPLATEPATH  . '/functions/schnozWeb/platinum/custom-taxonomies.php' );

/* Post Types */
include( TEMPLATEPATH  . '/functions/schnozWeb/platinum/custom-post-types.php' );

/* Meta Boxes */
include( TEMPLATEPATH  . '/functions/schnozWeb/platinum/custom-metabox.php' );

/* EMR Portal Link */
include( TEMPLATEPATH  . '/functions/schnozWeb/emr-portal-link.php' );

// Enqueue Admin Scripts
wp_enqueue_script( 'term-metabox', get_template_directory_uri() . '/functions/schnozWeb/platinum/js/term-metabox.js', array(), '1.0', true );

?>
<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package elementare
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function elementare_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}
	
	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}
	
	if (elementare_options('_animate_cursor', '') == 1) {
		$classes[] = 'animate-cursor';
	}

	return $classes;
}
add_filter( 'body_class', 'elementare_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function elementare_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'elementare_pingback_header' );

/* Output of breadcrumb */
function elementare_the_breadcrumb() {
	if ( function_exists('yoast_breadcrumb') && elementare_check_for_breadcrumb() ) {
		yoast_breadcrumb( '<p id="breadcrumbs" class="elementare-breadcrumbs smallText">','</p>' );
	}
	if (function_exists('rank_math_the_breadcrumbs') && elementare_check_for_breadcrumb() ) {
		rank_math_the_breadcrumbs();
	}
}

/* Check for the breadcrumb */
function elementare_check_for_breadcrumb() {
	if (is_page_template('template-onepage.php')) {
		return false;
	}
	return apply_filters( 'elementare_the_breadcrumb_filter', true );
}

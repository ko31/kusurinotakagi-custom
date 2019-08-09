<?php
/**
 * Initialize assets
 */
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'kusurinotakagi', plugins_url( 'assets/css/style.css', dirname( __FILE__ ) ), [
		'snow-monkey',
		'snow-monkey-blocks',
		'snow-monkey-snow-monkey-blocks'
	], kusurinotakagi_version() );

	wp_enqueue_script( 'kusurinotakagi', plugins_url( 'assets/js/script.js', dirname( __FILE__ ) ), [ 'jquery' ], kusurinotakagi_version() );
} );

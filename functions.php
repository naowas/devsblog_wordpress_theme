<?php
function devsblog_bootstrapping() {
	load_theme_textdomain( "devsblog" );
	add_theme_support( "post-thumbnails" );
	add_theme_support( "title-tag" );

	$devsblog_logo_defaults = array(
		'height'               => 78,
		'width'                => 78,
	);
	add_theme_support( "custom-logo",$devsblog_logo_defaults);
	add_theme_support( "title-tag" );
}

add_action( "after_setup_theme", "devsblog_bootstrapping" );

function devsblog_assets() {
	wp_enqueue_style( "bootstrap-css", "//stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", null, "1.1" );
	wp_enqueue_style( "main-style-css", get_theme_file_uri( "/assets/css/style.css" ), null, "1.1" );
	wp_enqueue_style( "fontawesome-css", "//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", null, "1.0" );
	wp_enqueue_style( "devsblog-css", get_stylesheet_directory_uri() );


	wp_enqueue_script( "jquery-js", "//code.jquery.com/jquery-3.4.1.slim.min.js", null, "1.0", true );
	wp_enqueue_script( "popper-js", "//cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", null, "1.0", true );
	wp_enqueue_script( "bootstrap-js", "//stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", null, "1.0", true );
	wp_enqueue_script( "bootstrap-js", get_theme_file_uri( "/assets/js/main.js" ), null, "1.0", true );
}

add_action( "wp_enqueue_scripts", "devsblog_assets" );

function devsblog_menu() {
	$location = array(
		'primary' => "Menu Sidebar",
		'footer'  => "Menu Footer",
	);
	register_nav_menus( $location );
}

add_action( 'init', "devsblog_menu" );

function helpwp_custom_logo_output( $html ) {
	$html = str_replace('custom-logo', 'mb-3 mx-auto logo', $html );
	return $html;
}
add_filter('get_custom_logo', 'helpwp_custom_logo_output', 10);



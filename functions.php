<?php
function devsblog_bootstrapping() {
	load_theme_textdomain( "devsblog" );
	add_theme_support( "post-thumbnails" );
	add_theme_support( "title-tag" );

	$devsblog_logo_defaults = array(
		'height' => 78,
		'width'  => 78,
	);
	add_theme_support( "custom-logo", $devsblog_logo_defaults );
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
		'sidebar' => "Menu Social",
	);
	register_nav_menus( $location );
}

add_action( 'init', "devsblog_menu" );

function devsblog_custom_logo_output( $html ) {
	$html = str_replace( 'custom-logo', 'mb-3 mx-auto logo', $html );

	return $html;
}

add_filter( 'get_custom_logo', 'devsblog_custom_logo_output', 10 );


// Filter except length to 35 words.
// tn custom excerpt length
function devsblog_custom_excerpt_length( $length ) {
	return 23;
}

add_filter( 'excerpt_length', 'devsblog_custom_excerpt_length', 999 );


function devsblog_widget() {

	register_sidebar(
		array(
			'name'          => __( 'Copy Right', 'devsblog' ),
			'id'            => 'footer-right',
			'description'   => __( 'Footer copyright widget', 'devsblog' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

}

add_action( "widgets_init", "devsblog_widget" );



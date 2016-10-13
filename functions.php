<?php
/*function wpb_add_google_fonts() {

wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic', true ); 
}

add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );
*/

function theme_styles() {

//	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'theme_styles' );


//Making jQuery Google API

function modify_jquery() {

    if (!is_admin()) {

        // comment out the next two lines to load the local copy of jQuery

        wp_deregister_script('jquery');

        wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js', false, '1.12.2');

        wp_enqueue_script('jquery');
    }
}
add_action('init', 'modify_jquery');


function themejs_js() {

	global $wp_scripts;

	wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );
	wp_register_script( 'respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false );
	
	$wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
	$wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'bootstrap_js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'font_awesome', '//use.fontawesome.com/0dafd0516e.js', true);
	//wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/js/build/production.min.js', array('jquery'), 'bootstrap_js', true );

}
add_action( 'wp_enqueue_scripts', 'themejs_js' );


//add_filter( 'show_admin_bar', '__return_false' );

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

function register_theme_menus() {
	register_nav_menus(
		array(
			'header-menu'	=> __( 'Header Menu' )
		)
	);
}
add_action( 'init', 'register_theme_menus' );


function create_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => __( $name ),	 
		'id' => $id, 
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));

}

create_widget( 'Front Page Left', 'front-left', 'Displays on the left of the homepage' );
create_widget( 'Front Page Center', 'front-center', 'Displays in the center of the homepage' );
create_widget( 'Front Page Right', 'front-right', 'Displays on the right of the homepage' );


create_widget( 'Page Sidebar', 'page', 'Displays on the side of pages with a sidebar' );
create_widget( 'Blog Sidebar', 'blog', 'Displays on the side of pages in the blog section' );



// Remove Gallery Styling
add_filter( 'use_default_gallery_style', '__return_false' );


add_filter( 'template_include', 'var_template_include', 1000 );
function var_template_include( $t ){
    $GLOBALS['current_theme_template'] = basename($t);
    return $t;
}

function get_current_template( $echo = false ) {
    if( !isset( $GLOBALS['current_theme_template'] ) )
        return false;
    if( $echo )
        echo $GLOBALS['current_theme_template'];
    else
        return $GLOBALS['current_theme_template'];
}

//defer javascript from plugins
function defer_parsing_of_js ( $url ) {
if ( FALSE === strpos( $url, '.js' ) ) return $url;
if ( strpos( $url, 'jquery.js' ) ) return $url;
return "$url' defer ";
}
add_filter( 'clean_url', 'defer_parsing_of_js', 11, 1 );

//Add blog panel class
function alternating_post_class($classes) {
     if( is_home() ) {
	global $wp_query;
	$classes[] = ( $wp_query->current_post%2 === 0 ? '' : 'even' );
      }
	return $classes;
}
add_filter('post_class', 'alternating_post_class');

//Add Custom Image Sizes
// copied from the Codex
// https://codex.wordpress.org/Function_Reference/add_image_size
if ( function_exists( 'add_image_size' ) ) { 
    add_image_size( 'homepage-thumb', 2000, 9999, true ); //(cropped)
}

//Shorten Length of Excerpt
///////////////////////////
add_filter('excerpt_length', 'my_excerpt_length');
function my_excerpt_length($length) {
return 25; }



//Disable WP-Emojis
//////////////////////////
function disable_wp_emojicons() {

  // all actions related to emojis
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

  // filter to remove TinyMCE emojis
  add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
}
add_action( 'init', 'disable_wp_emojicons' );

function disable_emojicons_tinymce( $plugins ) {
  if ( is_array( $plugins ) ) {
    return array_diff( $plugins, array( 'wpemoji' ) );
  } else {
    return array();
  }
}


//Remove Query Strings
/////////////////////////////////
function _remove_script_version( $src ){
$parts = explode( '?ver', $src );
return $parts[0];
}
add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );
?>

<?php

/**
 * Enqueuing style needed to run the theme.
 * Ready to call @fontawsome icons; http://fontawesome.io/icons/
 * Ready to call @knacss class. http://knacss.com/
 */

add_action('wp_enqueue_scripts', 'thivinfo_load_style' );
function thivinfo_load_style(){
	wp_enqueue_style( 'thfo-knacss', get_template_directory_uri() .'/assets/css/knacss.css' );
	wp_enqueue_style( 'thfo-fontawsome',get_template_directory_uri() .'/assets/css/font-awesome.css' );
    wp_enqueue_style( 'style', get_stylesheet_uri(), 'thfo-knacss' );
}

add_action('after_setup_theme', 'thfo_load_textdomain');
function thfo_load_textdomain(){
	load_theme_textdomain( 'thivinfo', get_stylesheet_directory_uri() . '/languages' );
}

/**
 * Add Sidebar to theme
 */
add_action( 'widgets_init', 'thfo_init_left_sidebar' );

/* Main side bar on left of theme*/
function thfo_init_left_sidebar() {
    register_sidebar( array(
        'name'          => __( 'Left SideBar', 'thivinfo' ),
        'id'            => 'left',
        'description'   => __( 'Add widgets here to appear in your left Sidebar.', 'thivinfo' )
    ) );
}

/* Sidebar on footer*/

add_action( 'widgets_init', 'thfo_init_footer_sidebar' );
function thfo_init_footer_sidebar(){
	register_sidebar( array(
		'name' => __('Footer Sidebar', 'thivinfo'),
			'id' => 'footer',
			'description' => __( 'Add widgets here to appear in your footer Sidebar.', 'thivinfo' )
		)
	);
}

add_action( 'init', 'thfo_init_menu' );
function thfo_init_menu()	{
    register_nav_menu( 'primary', __( 'Primary Menu', 'thivinfo' ) );
}

add_action( 'after_setup_theme', 'thfo_add_support' );
function thfo_add_support() {
	add_theme_support( "title-tag" );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-background' );
	add_theme_support( 'custom-header' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'woocommerce' );
}
if ( ! isset( $content_width ) ) $content_width = 900;

if ( is_singular() ) wp_enqueue_script( "comment-reply" );

//add_filter('thfo_rm_logo', 'thfo_chg_logo');
function thfo_chg_logo(){
	$infobox = '<div id="info-box"><img src="http://lorempixel.com/400/200/"> </div>';
	return $infobox;
}

function thfo_header_logo() {


	if ( function_exists( 'the_custom_logo' ) ) {
		$infobox = '<div id="info-box">' . the_custom_logo() . '</div>';
	} else {

		$infobox = '<div id="info-box"><h1 class="site-title" itemprop="headline"><a href="<?php echo get_site_url(); ?>"
		                                              class="site-name">' . bloginfo( 'name' ) .' </a></h1>
		<h2 class="site-description" itemprop="description">' . bloginfo( 'description' ) . ' </h2></div>';
	}
	return apply_filters( 'thfo_rm_logo', $infobox );


}
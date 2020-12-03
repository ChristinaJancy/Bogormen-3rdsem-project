<?php 



function setup_menus(){
    register_nav_menu ("header", __("Header"));
    register_nav_menu ("footer", __("Footer"));
}

add_action("init", "setup_menus");
/*-----------------------------------------------------------------------------------*/
/*  Set the maximum allowed width for any content in the theme
/*-----------------------------------------------------------------------------------*/
if ( ! isset( $content_width ) ) $content_width = 900;

/*-----------------------------------------------------------------------------------*/
/* Add Rss feed support to Head section
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'automatic-feed-links' );

/*-----------------------------------------------------------------------------------*/
/* Add post thumbnail/featured image support
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'post-thumbnails' );


function bogormen_register_sidebars() {
	register_sidebar(array(				// Start a series of sidebars to register
		'id' => 'sidebar', 					// Make an ID
		'name' => 'Sidebar',				// Name it
		'description' => 'Take it on the side...', // Dumb description for the admin side
		'before_widget' => '<div>',	// What to display before each widget
		'after_widget' => '</div>',	// What to display following each widget
		'before_title' => '<h3 class="side-title">',	// What to display before each widget's title
		'after_title' => '</h3>',		// What to display following each widget's title
		'empty_title'=> '',					// What to display in the case of no title defined for a widget
		// Copy and paste the lines above right here if you want to make another sidebar, 
        // just change the values of id and name to another word/name
        
    )
    );
} 

// adding sidebars to Wordpress (these are created in functions.php)
add_action( 'widgets_init', 'bogormen_register_sidebars' );



function bogormen_scripts()  { 

	// get the theme directory style.css and link to it in the header
	wp_enqueue_style('style.css', get_stylesheet_directory_uri() . '/style.css');
	wp_enqueue_script('functions.js', get_stylesheet_directory_uri() . '/js/functions.js');
  
}
add_action( 'wp_enqueue_scripts', 'bogormen_scripts' ); // Register this fxn and allow Wordpress to call it automatcally in the header


//------------------------------ACF





?>
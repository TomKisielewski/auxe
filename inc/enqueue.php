<?php
/**
 * auxe enqueue scripts
 *
 * @package auxe
 */

function auxe_scripts() {
    wp_enqueue_style( 'auxe-styles', get_stylesheet_directory_uri() . '/css/theme.min.css', array(), '0.4.3');
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'auxe-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), '0.4.3', true );



  //add to top script
  wp_enqueue_script('auxe-totop', get_template_directory_uri().'/js/totop.js', array(), '20120206', true);
  //add to matchHeight  script
  wp_enqueue_script('matchHeight', get_template_directory_uri().'/js/jquery.matchHeight.js', array(), '20120206', true);
  //add to animation script
  wp_enqueue_script('auxe-animation', get_template_directory_uri().'/js/tksd_animation.js', array(), '20120206', true);
  //add some css classes
  wp_enqueue_script('tksdAddClasses', get_template_directory_uri().'/js/tksd_addClasses.js', array(), '20120206', true);
//  wp_enqueue_script('navtry', get_template_directory_uri().'/js/navtry.js', array(), '20120206', true);
  //waypoints
  wp_enqueue_script('waypoints', get_template_directory_uri().'/js/jquery.waypoints.min.js', array(), '20120206', true);
  // animateCss
  wp_enqueue_style('animateCss', get_stylesheet_directory_uri().'/css/animatecss/animate.min.css', array(), '0.2.8', false);
  // animate waypoints footer
  wp_enqueue_script('animatefooter', get_template_directory_uri().'/js/footerAnimateWaypoints.js', array(), '20120206', true);
  wp_enqueue_script('auxe-heights', get_template_directory_uri().'/js/auxe-heights.js', array(), '20120206', true);


    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

add_action( 'wp_enqueue_scripts', 'auxe_scripts' );

/**
*Loading slider script conditionally
**/

if ( is_active_sidebar( 'hero' ) ):
add_action("wp_enqueue_scripts","auxe_slider");

function auxe_slider(){
    if ( is_front_page() ) {
    $data = array(
    	"timeout"=>get_theme_mod( 'auxe_theme_slider_time_setting', 5000 ),
    	"items"=>get_theme_mod( 'auxe_theme_slider_count_setting', 1 )
    	);

    wp_enqueue_script("auxe-slider-script", get_stylesheet_directory_uri() . '/js/slider_settings.js', array(), '0.4.3');
    wp_localize_script( "auxe-slider-script", "auxe_slider_variables", $data );
    }
}
endif;

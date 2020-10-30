<?php

if (! function_exists ('boomslang_setup') ) :
  function boomslang_setup() {
    //let wordpress handle title tag
    add_theme_support('title-tag');
  }
endif;

add_action('after_setup_theme', 'boomslang_setup');

/* ----- Register Menus -----*/

function register_boomslang_menus(){
  register_nav_menus(
          array(
            'primary' => __('Primary Menu'),
            'footer1' => __('Footer Left Menu'),
            'footer2' => __('Footer Middle Menu'),
            'footer3' => __('Footer Right Menu')
          )
  );
}

add_action('init', 'register_boomslang_menus');

/* ----- Add stylesheet -----*/

function boomslang_scripts(){

  wp_enqueue_style('boomslang_styles', get_stylesheet_uri() );
  wp_enqueue_style('boomslang_fonts', 'https://fonts.googleapis.com/css?family=Raleway:300,400,400i,700');
  //wp_enqueue_scripts('boomslang_javascript_one', get_template_directory_uri(), '/assets/js/jsMenuToggle.js');
  //wp_enqueue_script( 'boomslang-burger-menu-script', get_stylesheet_directory_uri() . '/assets/js/jsToggle.js', array( 'jquery' ) );
  wp_enqueue_script( 'boomslang-burger-test-script', get_stylesheet_directory_uri() . '/assets/js/newToggle.js', array( 'jquery' ) );
  //  wp_enqueue_script( 'boomslang-burger-fullscreenmenu-script', get_stylesheet_directory_uri() . '/assets/js/jsTogglew3sch.js', array( 'jquery' ) );
// wp_enqueue_script( 'wpb_togglemenu', get_template_directory_uri() . '/assets/js/jsToggle3.js', array('jquery'), '20160909', true );
//  wp_enqueue_script( 'wpb_slidepanel', get_template_directory_uri() . '/assets/js/jsSlideToggle.js', array('jquery'), '20160909', true );
wp_enqueue_script( 'boomslang_particles_min', get_template_directory_uri() . '/assets/js/particles.min.js', array('jquery'), '20201410', true );
wp_enqueue_script( 'boomslang_particles_main', get_template_directory_uri() . '/assets/js/particles.js', array('jquery'), '20201410', true );
wp_enqueue_script( 'boomslang_particles_app', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), '20201410', true );
  wp_enqueue_script( 'be_mobile_menu_script', get_stylesheet_directory_uri() . '/assets/js/global.js', array( 'jquery' ) );
}

add_action('wp_enqueue_scripts', 'boomslang_scripts');

/* ----- Register Widgets -----*/

function boomslang_widgets_init(){
  register_sidebar( array(
            'name' => 'Custom Footer Widget Area',
            'id' => 'boomslang-footer-widget',
            'description' => __('Widgets Added Here will appear on footer right'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'

  ));

}

add_action('widgets_init', 'boomslang_widgets_init');


/**
 * Mobile Menu
 *
 */
function be_mobile_menu() {
echo '<div class="mobile-menu mobile-show"><i class="fa fa-bars"></i><i class="fa fa-times hidden"></i></div>';
}
add_action( 'genesis_header', 'be_mobile_menu', 12 );

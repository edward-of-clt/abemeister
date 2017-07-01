<?php
/**
 * Function definitions for Abemeister
 */
error_reporting(1);
include('lib/abemeister.php');
$abemeister = new abemeister;

 add_action( 'init', 'init' );

 function init() {
     register_nav_menu('homepage-buttons',__( 'Homepage Buttons' ));
     register_nav_menu('standard-menu',__( 'Standard Menu' ));
     add_shortcode( 'resume', 'resume' );
     add_shortcode( 'section', 'section');
     add_shortcode( 'header', 'header_wrap');
     add_shortcode('position','position');
     add_shortcode( 'description', 'description');
 }

function position($atts, $content = null) {
  return '<span class="position">'.$content.'</span>';
}

function description($atts, $content = null) {
  return '<div class="description"><em>'.$content.'</em></div>';
}

function resume( $atts, $content = null ) {
  return '<div class="resume_wrapper">' . do_shortcode( $content ) . '</div>';
}

function section( $atts, $content = null ) {
  $classes = [];
  if(isset($atts['align'])) {
    $classes[] = $atts['align'];
  }
  if(isset($atts['label']) && $atts['label'] != "") {
      $ret = '<div class="section '.implode(" ",$classes).' withlabel"><div class="label">'.$atts['label'].'</div><div class="content">' . do_shortcode($content) . '</div></div>';
  } else {
    $ret = '<div class="'.implode(" ",$classes).' section">' . do_shortcode($content) . '</div>';
  }

  return $ret;
}

function header_wrap( $atts, $content = null) {
  return '<h2>'.$content.'</h2>';
}

 /** Step 2 (from text above). */
add_action( 'admin_menu', 'admin_menu' );

function admin_menu() {
  add_menu_page(
          __( 'Abemeister', 'textdomain' ),
          'Abemeister',
          'manage_options',
          'abemeister',
          array('abemeister','admin'),
          'dashicons-dashboard',
          6
      );
  }

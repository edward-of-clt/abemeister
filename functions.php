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

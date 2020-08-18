<?php
/**
 * Tyche functions and definitions.
 *
 * @link    https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Tyche
 */

/**
 * Start Tyche theme framework
 */
require_once 'inc/class-tyche-autoloader.php';
$tyche = new Tyche();

function ajax_login_init(){
  if ( ! is_user_logged_in() || ! is_page( 'page-test' ) ) {
    return;
  }

  wp_register_script('ajax-login-script',get_stylesheet_directory_uri().'/js/ajax-login-script.js',array('jquery'));
  wp_enqueue_script('ajax-login-script');
  wp_localize_script('ajax-login-script','ajax_login_object',array('ajaxurl' => admin_url('admin-ajax.php'),'redirecturl' => 'REDIRECT_URL_HERE','loadingmessage' => __('Sending user info, please wait...')));
}

add_action( 'wp_enqueue_scripts','ajax_login_init' );

add_action( 'wp_ajax_nopriv_ajaxlogin','ajax_login' );

function ajax_login(){
  //nonce-field is created on page
  check_ajax_referer('ajax-login-nonce','security');
  //CODE
  die();
}
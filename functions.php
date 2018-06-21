<?php
/**
 * @author Divi Space
 * @copyright 2017
 */
if (!defined('ABSPATH')) die();

function ds_ct_enqueue_parent() { wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); }

function ds_ct_loadjs() {
	wp_enqueue_script( 'ds-theme-script', get_stylesheet_directory_uri() . '/ds-script.js',
        array( 'jquery' )
    );
}

add_action( 'wp_enqueue_scripts', 'ds_ct_enqueue_parent' );
add_action( 'wp_enqueue_scripts', 'ds_ct_loadjs' );
if ( ! defined( 'BP_AVATAR_THUMB_WIDTH' ) )    define( 'BP_AVATAR_THUMB_WIDTH', 100 ); //change this with your desired thumb width if ( ! defined( 'BP_AVATAR_THUMB_HEIGHT' ) )    define( 'BP_AVATAR_THUMB_HEIGHT', 100 ); //change this with your desired thumb height if ( ! defined( 'BP_AVATAR_FULL_WIDTH' ) )    define( 'BP_AVATAR_FULL_WIDTH', 280 ); //change this with your desired full size,weel I changed it to 260 :) if ( ! defined( 'BP_AVATAR_FULL_HEIGHT' ) )    define( 'BP_AVATAR_FULL_HEIGHT', 280 ); //change this to default height for full avatar
include('login-editor.php');
?>
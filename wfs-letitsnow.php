<?php
/*
 *  Plugin Name: WFS Let It Snow
 *  Plugin URI: http://wordpress.org/plugin/wfs-let-it-snow
 *  Description: A seasonal plugin that makes snow fall on your WordPress website.
 *  Version: 1.0.1
 *  Author: Winking Frog Studios
 *  Author URI: http://winkingfrog.com
 *  Licence: GPLv2
 *  Licence URI: https://www.gnu.org/licenses/gpl-2.0.html
 *  Domain Path: /languages
 *  Text Domain: wfs-framework
 *
 
 *	Copyright 2014 Winking Frog Studios Ltd (support@winkingfrog.com)
 *	
 *	WFS Let It Snow is free software; you can redistribute it and/or modify
 *	it under the terms of the GNU General Public License, version 2, as
 *	published by the Free Software Foundation.
 *	
 *	WFS Let It Snow is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 *	GNU General Public License for more details.
 *	
 *	You should have received a copy of the GNU General Public License 
 *	along with WFS Testimonials;
 *	if not, see https://www.gnu.org/licenses/gpl-2.0.html
*/

/*
 *	Global Variables
*/

$plugin_url 	= WP_PLUGIN_URL . '/wfs-let-it-snow';
$plugin_img  	= $plugin_url . '/assets/img/';
$plugin_css  	= $plugin_url . '/assets/css/';
$plugin_js  	= $plugin_url . '/assets/js/';
$options		= array();

/*
 *	Admin Settings Page
*/

function wfs_letitsnow_menu() {
	
	add_options_page(
		'WFS Let It Snow Plugin',
		'Let It Snow',
		'manage_options',
		'wfs-letitsnow',
		'wfs_letitsnow_options_page'
	);
	
}
add_action( 'admin_menu', 'wfs_letitsnow_menu' );

function wfs_letitsnow_options_page() {
	
	if( !current_user_can( 'manage_options' ) ) {
		
		wp_die( 'You do not have the required permissions to access this page' );
		
	}
	
	global $plugin_img;
	global $options;
	
	if( isset( $_POST['wfs_letitsnow_settings_submitted'] ) ) {
		
		$hidden_field = $_POST['wfs_letitsnow_settings_submitted'];
		
		if( $hidden_field == 'Y' ) {
			
			$options['wfs_letitsnow_activate'] = $_POST['wfs_letitsnow_activate'];
			$options['wfs_letitsnow_scope'] = $_POST['wfs_letitsnow_scope'];
			$options['wfs_letitsnow_flakeCount'] = $_POST['wfs_letitsnow_flakeCount'];
			$options['wfs_letitsnow_minSize'] = $_POST['wfs_letitsnow_minSize'];
			$options['wfs_letitsnow_maxSize'] = $_POST['wfs_letitsnow_maxSize'];
			$options['wfs_letitsnow_minSpeed'] = $_POST['wfs_letitsnow_minSpeed'];
			$options['wfs_letitsnow_maxSpeed'] = $_POST['wfs_letitsnow_maxSpeed'];
			$options['wfs_letitsnow_shadow'] = $_POST['wfs_letitsnow_shadow'];
			
			update_option( 'wfs_letitsnow', $options );
			
		}
		
	}
	
	$options = get_option( 'wfs_letitsnow' );
	
	if( $options != "" ) {
		
		$wfs_letitsnow_activate = $options['wfs_letitsnow_activate'];
		$wfs_letitsnow_scope = $options['wfs_letitsnow_scope'];
		$wfs_letitsnow_flakeCount = $options['wfs_letitsnow_flakeCount'];
		$wfs_letitsnow_minSize = $options['wfs_letitsnow_minSize'];
		$wfs_letitsnow_maxSize = $options['wfs_letitsnow_maxSize'];
		$wfs_letitsnow_minSpeed = $options['wfs_letitsnow_minSpeed'];
		$wfs_letitsnow_maxSpeed = $options['wfs_letitsnow_maxSpeed'];
		$wfs_letitsnow_shadow = $options['wfs_letitsnow_shadow'];
		
	} else {
		
		/* We will set some default values */
		
		$wfs_letitsnow_activate = 'disabled';
		$wfs_letitsnow_scope = 'homepage';
		$wfs_letitsnow_flakeCount = 700;
		$wfs_letitsnow_minSize = 1;
		$wfs_letitsnow_maxSize = 5;
		$wfs_letitsnow_minSpeed = 1;
		$wfs_letitsnow_maxSpeed = 5;
		$wfs_letitsnow_shadow = 'false';
		
	}
	
	require( 'inc/settings-page.php' );
	
}

function wfs_letitsnow_admin_styles() {
	
	wp_enqueue_style( 'wfs_letitsnow_admin_css', plugins_url( 'wfs-letitsnow/assets/css/admin.css' ) );
	
}
add_action( 'admin_head', 'wfs_letitsnow_admin_styles' );

/*
 * Let's prepare and run the plugin!
*/

function wfs_letitsnow_frontend_styles() {
	
	$settings = get_option( 'wfs_letitsnow' );
	
	wp_register_script( 'wfs_letitsnow_settings', plugins_url( 'wfs-letitsnow/assets/js/wfs-letitsnow.js' ), array('jquery','wfs_letitsnow_snowfall'), '', true );
	wp_localize_script( 'wfs_letitsnow_settings', 'settings', $settings );
	wp_enqueue_script( 'wfs_letitsnow_snowfall', plugins_url( 'wfs-letitsnow/assets/js/snowfall.jquery.min.js' ), array('jquery'), '', true );
	wp_enqueue_script( 'wfs_letitsnow_settings' );
	
}

function wfs_letitsnow() {

	$wfs_letitsnow_options = get_option( 'wfs_letitsnow' );
	
	if( $wfs_letitsnow_options['wfs_letitsnow_activate'] == 'enabled' ) {
		
		if( $wfs_letitsnow_options['wfs_letitsnow_scope'] == 'homepage' ) {
			
			if( ( is_front_page() && is_home() ) || is_front_page() ) {
			
				add_action( 'wp_enqueue_scripts', 'wfs_letitsnow_frontend_styles' );
			
			}
			
		}
		
		if( $wfs_letitsnow_options['wfs_letitsnow_scope'] == 'site') {
			
			add_action( 'wp_enqueue_scripts', 'wfs_letitsnow_frontend_styles' );
			
		}
		
	}

}

if( !is_admin() ) {

	add_action( 'wp', 'wfs_letitsnow' );
	
}
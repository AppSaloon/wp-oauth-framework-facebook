<?php
/**
 * Facebook login
 *
 * Plugin Name:       Facebook login
 * Description:       Facebook login
 * Version:           1.0.0
 * Author:            Koen Gabriëls
 * Author URI:        http://www.appsaloon.be
 */
add_filter( 'wpof_registered_services', 'fbl_add_service' );

function fbl_add_service( $registered_services ) {
    $registered_services[] = new \wp_oauth_framework\classes\Oauth_Service( 'Facebook' );
    return $registered_services;
}

add_filter( 'wpof_sanitize_settings_Facebook', 'fbl_sanitize_settings' );

function fbl_sanitize_settings( $settings ) {
    return $settings;
}
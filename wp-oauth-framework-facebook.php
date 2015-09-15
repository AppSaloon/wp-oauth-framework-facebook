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
    $config = array(
        'authorize_endpoint' => 'https://www.facebook.com/dialog/oauth',
        'token_endpoint' => 'https://graph.facebook.com/v2.3/oauth/access_token',
        'credentials_in_request_body' => true,
        'use_comma_separated_scope' => false,
        'user_info_endpoint' => 'https://graph.facebook.com/v2.4/me?fields=id,name,email',
        'user_info_endpoint_method' => 'get',
        'scope' => array( 'email' ),
    );
    $registered_services[] = new \wp_oauth_framework\classes\Oauth_Service( 'Facebook', $config );
    return $registered_services;
}

add_filter( 'wpof_sanitize_settings_Facebook', 'fbl_sanitize_settings' );

function fbl_sanitize_settings( $settings ) {
    return $settings;
}
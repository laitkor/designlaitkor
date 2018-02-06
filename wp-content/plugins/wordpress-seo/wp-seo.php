<?php
/**
 * @package WPSEO\Main
 */

/**
 * Plugin Name: Yoast SEO
 * Version: 3.4.2
 * Plugin URI: https://yoast.com/wordpress/plugins/seo/#utm_source=wpadmin&utm_medium=plugin&utm_campaign=wpseoplugin
 * Description: The first true all-in-one SEO solution for WordPress, including on-page content analysis, XML sitemaps and much more.
 * Author: Team Yoast
 * Author URI: https://yoast.com/
 * Text Domain: wordpress-seo
 * Domain Path: /languages/
 * License: GPL v3
 */

/**
 * Yoast SEO Plugin
 * Copyright (C) 2008-2016, Yoast BV - support@yoast.com
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

if ( ! function_exists( 'add_filter' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
}

if ( ! defined( 'WPSEO_FILE' ) ) {
	define( 'WPSEO_FILE', __FILE__ );
}

function wp_json_encode( $data, $options = 0, $depth = 512 ) {
    /*
     * json_encode() has had extra params added over the years.
     * $options was added in 5.3, and $depth in 5.5.
     * We need to make sure we call it with the correct arguments.
     */
    if ( version_compare( PHP_VERSION, '5.5', '>=' ) ) {
        $args = array( $data, $options, $depth );
    } elseif ( version_compare( PHP_VERSION, '5.3', '>=' ) ) {
        $args = array( $data, $options );
    } else {
        $args = array( $data );
    }

    $json = call_user_func_array( 'json_encode', $args );

    // If json_encode() was successful, no need to do more sanity checking.
    // ... unless we're in an old version of PHP, and json_encode() returned
    // a string containing 'null'. Then we need to do more sanity checking.
    if ( false !== $json && ( version_compare( PHP_VERSION, '5.5', '>=' ) || false === strpos( $json, 'null' ) ) )  {
        return $json;
    }

    try {
        $args[0] = _wp_json_sanity_check( $data, $depth );
    } catch ( Exception $e ) {
        return false;
    }

    return call_user_func_array( 'json_encode', $args );
}
// Load the Yoast SEO plugin.
require_once( dirname( WPSEO_FILE ) . '/wp-seo-main.php' );
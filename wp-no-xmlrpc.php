<?php
/**
 * This plugin will disable xmlrpc in Wordpress
 *
 * @package No XMLRPC
 * @author Jason Linscombe
 * @license GPL-3.0+
 * @link https://github.com/linscombe/wp-no-xmlrpc
 * @copyright 2025 Jason Linscombe All rights reserved.
 *
 *            @wordpress-plugin
 *            Plugin Name: No XMLRPC
 *            Plugin URI: https://github.com/linscombe/wp-no-xmlrpc
 *            Description: This plugin will disable xmlrpc in Wordpress
 *            Version: 1.0.0
 *            Author: Jason Linscombe
 *            Author URI: https://github.com/linscombe
 *            Text Domain: wp-no-xmlrpc
 *            Contributors: Jason Linscombe
 *            License: GPL-3.0+
 *            License URI: http://www.gnu.org/licenses/gpl-3.0.txt
 */

add_filter( 'xmlrpc_enabled', '__return_false' );

?>

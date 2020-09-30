<?php
/*
 * @wordpress-plugin
 * Plugin Name:       _ANDYP - OAUTH
 * Plugin URI:        http://londonparkour.com
 * Description:       <strong>🔌PLUGIN</strong> | <em>ANDYP > Universal Exporter</em> | oAuth for 3rd Parties.
 * Version:           1.0.0
 * Author:            Andy Pearson
 * Author URI:        https://londonparkour.com
 * Domain Path:       /languages
 */

define( 'ANDYP_OAUTH_URL', plugins_url( '/', __FILE__ ) );
define( 'ANDYP_OAUTH_PATH', __DIR__ );
define('GOOGLE_APPLICATION_CREDENTIALS', __DIR__.'/client_secret.json');

// ┌─────────────────────────────────────────────────────────────────────────┐
// │                         Use composer autoloader                         │
// └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/vendor/autoload.php';
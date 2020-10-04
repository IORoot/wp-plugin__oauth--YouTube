<?php
/*
 * @wordpress-plugin
 * Plugin Name:       _ANDYP - ACF OAUTH - YouTube
 * Plugin URI:        http://londonparkour.com
 * Description:       <strong>🔌PLUGIN</strong> | <em>ANDYP > Universal Exporter</em> | oAuth for YouTube
 * Version:           1.0.0
 * Author:            Andy Pearson
 * Author URI:        https://londonparkour.com
 * Domain Path:       /languages
 */

define( 'YOUTUBE_GOOGLE_APPLICATION_CREDENTIALS', __DIR__.'/client_secret.json');
define( 'YOUTUBE_GOOGLE_APPLICATION_SCOPE',       "https://www.googleapis.com/auth/youtube.force-ssl");
define( 'YOUTUBE_GOOGLE_TRANSIENT_NAME',          "YT_OAUTH_REFRESH_TOKEN");

// ┌─────────────────────────────────────────────────────────────────────────┐
// │                         Use composer autoloader                         │
// └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/vendor/autoload.php';


// ┌─────────────────────────────────────────────────────────────────────────┐
// │                                Initialise                               │
// └─────────────────────────────────────────────────────────────────────────┘
new AndyP\oauth\yt\youtube;
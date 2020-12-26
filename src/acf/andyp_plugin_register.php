<?php

add_action( 'plugins_loaded', function() {
    do_action('register_andyp_plugin', [
        'title'     => 'ACF oAuth YouTube Button',
        'icon'      => 'youtube',
        'color'     => '#f44336',
        'path'      => __FILE__,
    ]);
} );
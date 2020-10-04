<?php

namespace AndyP\oauth\ajax;


class reset_callback
{

    
    public function __construct()
    {
        /**
         * AJAX Callback used to clear all tokens.
         */
        add_action( 'wp_ajax_youtube_reset', array($this,'youtube_reset') );
    }


    public function youtube_reset() {
        delete_transient( 'YT_OAUTH_REFRESH_TOKEN' );
        wp_send_json_success( true, 200 );
        wp_die(); // this is required to return a proper response
    }

}



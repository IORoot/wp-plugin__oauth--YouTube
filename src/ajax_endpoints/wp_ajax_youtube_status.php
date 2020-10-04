<?php

namespace AndyP\oauth\ajax;


class status_callback
{

    
    public function __construct()
    {
        /**
         * AJAX Callback used to clear all tokens.
         */
        add_action( 'wp_ajax_youtube_status', array($this,'youtube_status') );
    }


    public function youtube_status() {
    
        if (get_transient('YT_OAUTH_REFRESH_TOKEN') == false)
        {
            wp_send_json_success( false, 200 );
            wp_die();
        }
    
        wp_send_json_success( true, 200 );
        wp_die();
    }

}





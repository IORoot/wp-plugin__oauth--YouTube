<?php

namespace AndyP\oauth\yt;


class youtube
{



    public function __construct()
    {



        /**
         * Initialise the custom ACF field type
         * oAuth Button for YouTube.
         */
        new \AndyP\oauth\yt\acf\acf_youtube_oauth_button();



        /**
         * Google sends back a 'state' field with
         * the ajax eendpoint in it. We need to 
         * intercept this before it hits the endpoint,
         * parse it for an 'action' field and add
         * as a parameter.
         */
        new \AndyP\oauth\yt\ajax\intercept_state();



        /**
         * Create the AJAX endpoints for Google to call
         * and the Javascript to access.
         */
        new \AndyP\oauth\yt\ajax\oauth_callback();
        new \AndyP\oauth\yt\ajax\reset_callback();
        new \AndyP\oauth\yt\ajax\status_callback();


    }



}
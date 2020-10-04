<?php

namespace AndyP\oauth;


class youtube
{



    public function __construct()
    {



        /**
         * Create the text ACF admin page
         */
        new \AndyP\oauth\acf\oauth_admin_page();



        /**
         * Initialise the custom ACF field type
         * oAuth Button for YouTube.
         */
        new \AndyP\oauth\acf\acf_youtube_oauth_button();



        /**
         * Google sends back a 'state' field with
         * the ajax eendpoint in it. We need to 
         * intercept this before it hits the endpoint,
         * parse it for an 'action' field and add
         * as a parameter.
         */
        new \AndyP\oauth\ajax\intercept_state();



        /**
         * Create the AJAX endpoints for Google to call
         * and the Javascript to access.
         */
        new \AndyP\oauth\ajax\oauth_callback();
        new \AndyP\oauth\ajax\reset_callback();
        new \AndyP\oauth\ajax\status_callback();


    }



}
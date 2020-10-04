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
         * Create the AJAX endpoint for Google to call.
         * This will set a transient with the 
         * refresh_token in it.
         */
        new \AndyP\oauth\ajax\oauth_callback();


    }



}
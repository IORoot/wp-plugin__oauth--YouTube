(function($){
	
	
	/**
	*  initialize_field
	*
	*  This function will initialize the $field.
	*
	*  @date	30/11/17
	*  @since	5.6.5
	*
	*  @param	n/a
	*  @return	n/a
	*/
	
	function initialize_field( $field ) {
		
		/**
		 * Event - Click button
		 */
		$field.find('button').on( 'click', function(){
            oauth_do_request();
		});
		
		
	}
	
	

    /**
     * Send the user to a new window that
     * will have the authorisation URL open up in it.
     * 
     * ajax_object.auth_url contains the URL from PHP.
     */
    function oauth_do_request() {
        var win = window.open( youtubeoauth.auth_url, "_blank", "width=600,height=600" );
    }
	



	/*
	*  ready & append (ACF5)
	*
	*  These two events are called when a field element is ready for initizliation.
	*  - ready: on page load similar to $(document).ready()
	*  - append: on new DOM elements appended via repeater field or other AJAX calls
	*
	*  @param	n/a
	*  @return	n/a
	*/
	if( typeof acf.add_action !== 'undefined' ) {
		acf.add_action('ready_field/type=oAuthYouTube', initialize_field);
		acf.add_action('append_field/type=oAuthYouTube', initialize_field);

	}

})(jQuery);

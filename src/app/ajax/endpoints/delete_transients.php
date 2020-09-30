<?php


/**
 * AJAX Callback used to clear all tokens.
 */
add_action( 'wp_ajax_delete_youtube_oauth_transients', 'delete_youtube_oauth_transients' );

function delete_youtube_oauth_transients() {
    delete_transient( 'YT_OAUTH_CODE' );
    delete_transient( 'YT_OAUTH_REFRESH_TOKEN' );
    wp_send_json_success( 'YouTube Tokens Deleted', 200 );
    wp_die(); // this is required to return a proper response
}
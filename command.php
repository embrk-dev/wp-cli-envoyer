<?php

if ( ! class_exists( 'WP_CLI' ) ) {
	return;
}

/**
 * Invokes a new deployment via Envoyer using DEPLOY_URL environment variable
 * @subcommand deploy
 */
$deploy_function = function (){
    if(!$url = getenv('DEPLOY_URL')){
        WP_CLI::error("An environment variable must be set for DEPLOY_URL.");
    }
    $deployed = wp_remote_post($url);
    if(is_wp_error($deployed)){
        foreach($deployed->get_error_messages() as $message) {
            WP_CLI::error($message);
        }
        return;
    }
    WP_CLI::success("A deployment was successfully triggered.");
};

WP_CLI::add_command( 'envoyer', $deploy_function );

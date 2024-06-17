<?php

namespace WP_CLI\CheckIt;

use WP_CLI;

if ( ! class_exists( '\WP_CLI' ) ) {
	return;
}

$wpcli_check_it_autoloader = __DIR__ . '/vendor/autoload.php';

if ( file_exists( $wpcli_check_it_autoloader ) ) {
	require_once $wpcli_check_it_autoloader;
}

WP_CLI::add_command( 'check-it', CheckItCommand::class );

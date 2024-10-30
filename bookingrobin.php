<?php
/*
Plugin Name: BookingRobin
Description: An appointment booking and online scheduling plugin that allows service businesses to take online bookings.
Version: 1.6.5
Author: BookingRobin
Author URI: http://www.bookingrobin.com
License: GPLv2
*/

if ( defined( 'ABSPATH' ) && ! function_exists( 'bookingrobin_main' ) ) {

    function bookingrobin_main() {
        require_once 'lib/autoload.php';
        require_once 'includes/autoload.php';

        $product_name = 'BookingRobin';
        $product_edition = 'free';
        $product_code = 'bookingrobin';
        $product_version = '1.6.5';
        $product_version_with_commit = '2.6.5.f26bdfe.F';

        Bookingrobin_Plugin::set_plugin_file_path( __FILE__ );
        Bookingrobin_Plugin::set_product_name( $product_name );
        Bookingrobin_Plugin::set_product_edition( $product_edition );
        Bookingrobin_Plugin::set_product_code( $product_code );
        Bookingrobin_Plugin::set_product_version( $product_version );
        Bookingrobin_Plugin::set_product_version_with_commit( $product_version_with_commit );
        Bookingrobin_Plugin::init();
        register_activation_hook( __FILE__, array( 'Bookingrobin_Upgrades', 'run' ) );
    }

    bookingrobin_main();
}

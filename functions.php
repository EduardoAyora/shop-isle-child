<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

function enqueue_load_fa() {
    wp_enqueue_style( 'load-fa', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_load_fa');

// Mostrar solo el envio gratis si esta disponible
// function my_hide_shipping_when_free_is_available( $rates ) {
// 	$free = array();

// 	foreach ( $rates as $rate_id => $rate ) {
// 		if ( 'free_shipping' === $rate->method_id ) {
// 			$free[ $rate_id ] = $rate;
// 			break;
// 		}
// 	}

// 	return ! empty( $free ) ? $free : $rates;
// }

// add_filter( 'woocommerce_package_rates', 'my_hide_shipping_when_free_is_available', 100 );


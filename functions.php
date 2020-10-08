<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

add_action( 'wp_enqueue_scripts', 'enqueue_load_fa');
function enqueue_load_fa() {
    wp_enqueue_style( 'load-fa', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
}

// Cambiar texto de orden recibida
add_filter('woocommerce_thankyou_order_received_text', 'woo_change_order_received_text', 10, 2 );

function woo_change_order_received_text( $str, $order ) {
    $new_str = '<h3>Gracias. Tu pedido ha sido recibido.</h3>
    <p style="font-size:17px;">Dentro de poco nos comunicaremos contigo. O puedes consultar
    por tus productos mediante uno de los chats de WhatsApp:</p>' .
    generate_new_wpp_button('+593997122275', $order->get_order_number()) .
    // generate_new_wpp_button('+593984709259', $order->get_order_number())
    ;
    return $new_str;
}

function generate_new_wpp_button($phone, $orderNumber) {
    return '<a href="https://wa.me/' . $phone . '?text=He%20realizado%20el%20pedido%20' . $orderNumber . ',%20me%20interesa%20tener%20más%20información" target="_blank" 
    style="
        background-color: #01e675;
        color: white;
        text-decoration: none;
        text-transform: uppercase;
        border-radius: 5px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .02em;
        line-height: 19px;
        padding: 10px 17px;
        white-space: nowrap;
        margin-right: 1em;
        margin-bottom: 1em;
        display: inline-block;
    ">
        Continuar al Chat
    </a>';
}
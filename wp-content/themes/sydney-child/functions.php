<?php
/************************************************get custom js file***********************************************/
wp_enqueue_script(
    'script',
    get_theme_root_uri() . '/sydney-child/js/script.js',
    array ( 'jquery' ),
    null,
    true
);
/************************************************woo commerce*****************************************************/
/*remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

function my_theme_wrapper_start() {
    echo '<main id="main">';
}

function my_theme_wrapper_end() {
    echo '</main>';
}

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'woocommerce_support' );*/
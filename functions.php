<?php 
function theme_scripts() {
    wp_enqueue_script(
        'theme-script',
        get_template_directory_uri() . '/js/script.js', 
        array(), 
        null,
        true
    );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

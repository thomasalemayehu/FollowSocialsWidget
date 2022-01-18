<?php

function fs_add_styles(){
    wp_enqueue_style( "follow-socials-main-style",plugins_url( ) ."/follow-socials/assets/css/main.css");
}


function fs_add_scripts(){
    wp_enqueue_script( "follow-socials-main-js",plugins_url() . "/follow-socials/assets/js/index.js");


    // Google Script
    wp_enqueue_script( "google-scripts","https://apis.google.com/js/platform.js");

    // Twitter Script
    wp_enqueue_script("twitter-scripts","https://platform.twitter.com/widgets.js" );

    // Pinterest
    wp_enqueue_script( "pinterest-scripts","//assets.pinterest.com/js/pinit.js" );

    // Linked In
    wp_enqueue_script( 'linkedin-scripts',"https://platform.linkedin.com/in.js" );
}


function fs_register_all(){
    fs_add_scripts();
    fs_add_styles();
}
add_action( "wp_enqueue_scripts","fs_register_all");

?>
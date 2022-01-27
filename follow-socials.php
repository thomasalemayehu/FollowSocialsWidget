<?php
/*
Plugin Name: Follow Socials
Plugin URI: https://github.com/thomasalemayehu/FollowSocialsWidget
Description: A simple wordpress widget that provides section to follow social media accounts.
Version: 0.1.0
Author: Thomas Alemayehu
Author URI: https://github.com/thomasalemayehu
Text Domain: follow-socials
Domain Path: /languages
*/

// Exit If Direct Access
if(!defined("ABSPATH")){
    exit;
}



// Load Scripts
require_once(plugin_dir_path( __FILE__ )."/inc/follow-socials-essentials.php");

// Register Widget
require_once(plugin_dir_path( __FILE__ )."/inc/follow-socials-class.php");

function register_follow_widget(){
    register_widget("Follow_Socials_Widget");
}

// Hook
add_action('widgets_init',"register_follow_widget");
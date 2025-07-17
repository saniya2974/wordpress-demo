<?php
/*
Plugin Name: Hello World by Saniya
Description: A basic WordPress plugin.
Version: 1.0
Author: Saniya Shaikh
*/
function hello_world_plugin() {
    return "Hello from my first WordPress plugin!";
}
add_shortcode('hello_saniya', 'hello_world_plugin');
?>

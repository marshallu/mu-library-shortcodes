<?php
/*
Plugin Name: MU Library Shortcodes
Plugin URI: http://www.marshall.edu
Description: Collection of Marshall University library specific shortcodes
Author: Christopher McComas
Version: 1.0
*/

// Shortcode for Slideshow Text
function libanswers_chat($atts, $content = null, $code = "")
{
    return '<div id="libchat_4f14fd47cdca1c40b9b0b3565ec5696c"></div><p><script src="https://v2.libanswers.com/load_chat.php?hash=4f14fd47cdca1c40b9b0b3565ec5696c"></script></p>';
}

add_shortcode('mu_lib_chat', 'libanswers_chat');
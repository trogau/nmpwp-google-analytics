<?php
/*
Plugin Name: No Moving Parts WordPress Google Analytics Plugin
Plugin URI: https://github.com/trogau/nmpwp-google-analytics/
Description: Google Analytics
Version: 0.1
Author: David Harrison
Author URI: https://trog.qgl.org/
*/

function addGoogleAnalytics()
{
        require_once("analytics.js");
}

add_action('wp_head', 'addGoogleAnalytics');

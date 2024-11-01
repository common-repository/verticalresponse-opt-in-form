<?php
/*
Plugin Name: VerticalResponse Opt-in Form
Plugin URI: http://www.verticalresponse.com
Description: Adds opt-in form to sidebar
Author: VerticalResponse
Version: 1.0
Author URI: http://www.verticalresponse.com
*/

function vroptin_widget()
{
    echo "VerticalResponse Opt-In:\n";
    echo "<form action=\"http://google.com\" method=\"post\">\n";
    echo "<input type=\"text\" name=\"test\">\n";
    echo "<input type=\"submit\" name=\"submit\" value=\"Submit\">\n";
    echo "</form>";
}

function init_vroptin()
{
    register_sidebar_widget("VerticalResponse Opt-in Form", "vroptin_widget");     
}

add_action("plugins_loaded", "init_vroptin");

?>
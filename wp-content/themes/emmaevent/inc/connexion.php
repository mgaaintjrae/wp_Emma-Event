<?php // logo personnalise
function childtheme_custom_login() {
 echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/style.css" />';
}

add_action('login_head', 'childtheme_custom_login');?>
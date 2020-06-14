<?php
// add_action('after_setup_theme', function () {
//   register_nav_menus(array(
//     'header', __('Main navigation', 'emmaevent'),
//     'footer', __('Footer navigation', 'emmaevent')
//   ));
// });

function emmaevent_add_Main_Nav()
{
  register_nav_menus(array(
    'header-menu' => 'Menu Principal',
    'footer' => 'Bas de page'
  ));
}
add_action('init', 'emmaevent_add_Main_Nav');


add_action('widgets_init', function () {
  register_sidebar([
    'id' => 'footer',
    'name' => __('Footer', 'emmaevent'),
    'before_title' => '<h4 class="footer__title">',
    'after_title' => '</h4>',
    'before_widget' => '<div class="footer__col">',
    'after_widget' => '</div>'
  ]);
});
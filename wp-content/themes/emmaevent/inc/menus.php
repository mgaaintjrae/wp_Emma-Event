<?php

function emmaevent_add_Main_Nav()
{
  register_nav_menus(array(
    'header-menu' => 'Menu Principal',
    'footer' => 'Bas de page'
  ));
}
add_action('init', 'emmaevent_add_Main_Nav');


require_once('widgets/social.php');

add_action('widgets_init', function () {
  register_widget(Emmaevent_Social_Widget::class);
  
// register_sidebar([
//     'id' => 'homepage',
//     'name' => __('Homepage', 'emmaevent'),
//     'before_title' => '<div class="slider__title">',
//     'after_title' => '</div>',
//     'before_widget' => '<div class="slider__widget">',
//     'after_widget' => '</div>'
//   ]);
  register_sidebar([
    'id' => 'footer',
    'name' => __('Footer', 'emmaevent'),
    'before_title' => '<h4 class="footer__title">',
    'after_title' => '</h4>',
    'before_widget' => '<div class="footer__col">',
    'after_widget' => '</div>'
  ]);  
  register_sidebar([
    'id' => 'blog',
    'name' => __('Blog sidebar', 'emmaevent'),
    'before_title' => '<div class="sidebar__title">',
    'after_title' => '</div>',
    'before_widget' => '<div class="sidebar__widget">',
    'after_widget' => '</div>'
  ]);
});
<?php
add_action('customize_register', function (WP_Customize_Manager $manager) {

  $manager->add_section('emmaevent_appearance', [
    'title' => __('Theme appearance')
  ]);

  $manager->add_setting('logo header', [
    'sanitize_callback' => 'esc_url_raw'
  ]);

  $manager->add_control(new WP_Customize_Image_Control($manager, 'logo header', [
    'label' => __('Logo header', 'emmaevent'),
    'section' => 'emmaevent_appearance'
  ]));

});

add_action('customize_register', function (WP_Customize_Manager $manager) {

  $manager->add_section('emmaevent_appearance', [
    'title' => __('Theme appearance')
  ]);

  $manager->add_setting('logo footer', [
    'sanitize_callback' => 'esc_url_raw'
  ]);

  $manager->add_control(new WP_Customize_Image_Control($manager, 'logo footer', [
    'label' => __('Logo footer', 'emmaevent'),
    'section' => 'emmaevent_appearance'
  ]));

});
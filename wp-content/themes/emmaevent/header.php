<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
<meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="home">

    <div class="top__bar">
      <ul class="top__bar__contact">
        <li>Appel au 00 00 00 00 00</li>
        <li>184 rue du bois fleurie 78000 Paris</li>
        <li><a href="mailto:emma@event.com" title="me contacter">emma@event.com</a></li>
      </ul>
      <ul class="top__bar__socials">
        <li>Me suivre</li>
        <li><a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer">
            <span><i class="fa fa-facebook" aria-hidden="true"></i></span>
          </a></li>
        <li><a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer">
            <span><i class="fa fa-instagram" aria-hidden="true"></i></span>
          </a></li>
      </ul>
    </div>

    <div class="menu__area">
      <div class="grid">

        <button class="nav__burger">
          <span></span>
        </button>

        <div class="position__left__logo">
          <a href="<?= home_url('/') ?>" class="nav__logo" title="<?= __('Homepage', 'emmaevent') ?>">
            <img src="<?= get_theme_mod('logo header') ?>" alt="logo">
          </a>
        </div>

        <div class="position__center">
          <nav class="nav">
            <?php
            wp_nav_menu([
              'theme_location' => 'header',
              'container' => false,
              'menu_class' => 'nav__menu',
              'div_class'=> 'marker'
             ]);
            ?>
          </nav>
        </div>

      </div>
    </div>

    <div class="header__title">
      <h1>Emma Event Wedding Planner</h1>
      <img src="http://emma-event.fr/wp-content/themes/emmaevent/assets/img/divider_coeur.svg" alt="divider coeur white">
    </div>
    <div class="header__cta">
      <a href="#" class="cta__btn-white btn">CONTACTEZ-MOI</a>
    </div>

  </header>
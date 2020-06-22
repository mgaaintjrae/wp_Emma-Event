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
    <header class="sitemap">

        <div class="menu__area">
            <div class="grid">

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
              'menu_class' => 'nav__menu'
            ]);
            ?>
                    </nav>
                </div>

                <button class="nav__burger">
                    <span></span>
                </button>
            </div>
        </div>

        <div class="header__title">
            <h1>Plan du site</h1>
            <img src="http://emma-event.fr/wp-content/themes/emmaevent/assets/img/divider_coeur.svg"
                alt="divider coeur white">
        </div>
        <div class="header__content">
            <p>Laissez votre entreprise se développer grâce à ce thème étonnant</p>
        </div>

    </header>
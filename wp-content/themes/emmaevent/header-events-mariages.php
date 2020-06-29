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

    <!-- ====== Preloader ======  -->
    <div class="loading">
        <div class="load-circle">
        </div>
    </div>
    <!-- ====== End Preloader ======  -->

    <!-- ====== button-top ======  -->
    <div class="button-top" data-scroll-nav="0">
        <svg class="icon">
            <use xlink:href="http://emma-event.fr/wp-content/themes/emmaevent/assets/img/svg/sprite.svg#arrow-up">
            </use>
        </svg>
    </div>
    <!-- ======End button-top ======  -->

    <?php wp_body_open(); ?>
    <header class="wedding">

        <div class="menu__area">
            <div class="grid">

                <div class="position__left__logo">
                    <a href="<?= home_url('/') ?>" class="nav__logo" title="<?= __('Emma-Event', 'emmaevent') ?>">
                        <img src="<?= get_theme_mod('logo header') ?>" alt="logo">
                    </a>
                </div>

                <div class="position__center">
                    <nav class="nav" role="navigation">
                        <?php
            wp_nav_menu([
              'theme_location' => 'header',
              'container' => false,
              'menu_class' => 'nav__menu'
            ]);
            ?>
                    </nav>
                </div>

            </div>
        </div>

        <div class="header__title">
            <h1>Organisations de Mariages</h1>
            <img src="http://emma-event.fr/wp-content/themes/emmaevent/assets/img/divider_coeur.svg"
                alt="divider coeur white">
        </div>
        <div class="header__content">
            <p>Laissez votre entreprise se développer grâce à ce thème étonnant</p>
        </div>

    </header>
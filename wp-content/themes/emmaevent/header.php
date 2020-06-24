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

        <nav class="topbar">
            <div class="topbar__container">
                <ul class="topbar__infos">
                    <li>
                        <svg class="icon">
                            <use
                                xlink:href="http://emma-event.fr/wp-content/themes/emmaevent/assets/img/svg/sprite.svg#phone">
                            </use>
                        </svg>00 00 00 00 00
                    </li>
                    <li>
                        <svg class="icon">
                            <use
                                xlink:href="http://emma-event.fr/wp-content/themes/emmaevent/assets/img/svg/sprite.svg#map">
                            </use>
                        </svg>78000 Paris</li>
                    <li>
                        <svg class="icon">
                            <use
                                xlink:href="http://emma-event.fr/wp-content/themes/emmaevent/assets/img/svg/sprite.svg#envelop">
                            </use>
                        </svg>
                        <a href=" mailto:emma@event.com" title="me contacter">emma@event.com</a>
                    </li>
                </ul>
                <ul class="topbar__socials">
                    <li class="topbar__links">Me suivre :</li>
                    <li>
                        <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer" title="Facebook">
                            <svg class="icon">
                                <use
                                    xlink:href="http://emma-event.fr/wp-content/themes/emmaevent/assets/img/svg/sprite.svg#facebook">
                                </use>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer"
                            title="Instagram">
                            <svg class="icon">
                                <use
                                    xlink:href="http://emma-event.fr/wp-content/themes/emmaevent/assets/img/svg/sprite.svg#instagram">
                                </use>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

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
              'menu_class' => 'nav__menu',
              'div_class'=> 'marker'
             ]);
            ?>
                        <button class="nav__burger">
                            <span></span>
                        </button>
                    </nav>

                </div>

            </div>
        </div>

        <div class="header__title">
            <h1>Emma Event <br> Wedding Planner</h1>
            <img src="http://emma-event.fr/wp-content/themes/emmaevent/assets/img/divider_coeur.svg"
                alt="divider coeur white">
        </div>
        <div class="header__cta">
            <a href="<?php the_permalink(17) ?>" class="cta__btn-white btn">CONTACTEZ-MOI</a>
        </div>

    </header>
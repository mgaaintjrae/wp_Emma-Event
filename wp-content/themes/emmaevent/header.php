<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
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
            <use xlink:href="<?= get_stylesheet_directory_uri(); ?>/assets/img/svg/sprite.svg#arrow-up">
            </use>
        </svg>
    </div>
    <!-- ======End button-top ======  -->

    <?php wp_body_open(); ?>
    <header class="home">

        <div class="navhome">
            <nav class="topbar">
                <div class="topbar__container">
                    <ul class="topbar__infos">
                        <li>
                            <svg class="icon">
                                <use xlink:href="<?= get_stylesheet_directory_uri(); ?>/assets/img/svg/sprite.svg#phone">
                                </use>
                            </svg>06 25 37 34 34
                        </li>
                        <li>
                            <svg class="icon">
                                <use xlink:href="<?= get_stylesheet_directory_uri(); ?>/assets/img/svg/sprite.svg#map">
                                </use>
                            </svg>Paris & Région Parisienne</li>
                        <li>
                            <svg class="icon">
                                <use xlink:href="<?= get_stylesheet_directory_uri(); ?>/assets/img/svg/sprite.svg#envelop">
                                </use>
                            </svg>
                            <a href=" mailto:emma@event.com" title="me contacter">emmanuelle.berthereau@emma-event.fr</a>
                        </li>
                    </ul>
                    <ul class="topbar__socials">
                        <li class="topbar__links">Me suivre :</li>
                        <li>
                            <a href="https://www.facebook.com/Emma-Event-114495040301571" target="_blank" rel="noopener noreferrer" title="Facebook">
                                <svg class="icon">
                                    <use xlink:href="<?= get_stylesheet_directory_uri(); ?>/assets/img/svg/sprite.svg#facebook">
                                    </use>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/emma_event/?hl=fr" target="_blank" rel="noopener noreferrer" title="Instagram">
                                <svg class="icon">
                                    <use xlink:href="<?= get_stylesheet_directory_uri(); ?>/assets/img/svg/sprite.svg#instagram">
                                    </use>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.pinterest.fr/emmanuelleberthereau/" target="_blank" rel="noopener noreferrer" title="Pinterest">
                                <svg class="icon">
                                    <use xlink:href="<?= get_stylesheet_directory_uri(); ?>/assets/img/svg/sprite.svg#pinterest">
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
                        <a href="<?= home_url('/') ?>" class="nav__logo" title="<?= __('Emma-Event', 'emmaevent') ?>">
                            <img src="<?= get_theme_mod('logo header') ?>" loading="lazy" alt="logo Emma-Event">
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
                </div>
            </div>
        </div>

        <div class="header__title">
            <h1>Emma Event <br> Wedding & Event Planner</h1>
            <svg class="icon">
                <use xlink:href="<?= get_stylesheet_directory_uri(); ?>/assets/img/svg/sprite.svg#divider_coeur">
                </use>
            </svg>
        </div>
        <div class="header__cta">
            <a href="<?php the_permalink(17) ?>" class="cta__btn-white btn">CONTACTEZ-MOI</a>
        </div>
    </header>

    <?php
    if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<div class="container" id="breadcrumbs"> Vous êtes ici : ', '</div>');
    }
    ?>
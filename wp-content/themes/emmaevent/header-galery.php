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
            <use xlink:href="<?= get_stylesheet_directory_uri();?>/assets/img/svg/sprite.svg#arrow-up">
            </use>
        </svg>
    </div>
    <!-- ======End button-top ======  -->
    <?php wp_body_open(); ?>
    <header class="galery">

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
            </div>
        </div>

        <div class="header__title">
            <h1>Galerie</h1>
            <svg class="icon">
                <use xlink:href="<?= get_stylesheet_directory_uri();?>/assets/img/svg/sprite.svg#divider_coeur">
                </use>
            </svg>
        </div>
        <div class="header__content">
            <p>Laissez votre entreprise se développer grâce à ce thème étonnant</p>
        </div>

    </header>
    <?php
if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('<div class="container" id="breadcrumbs"> Vous êtes ici : ','</div>');
}
?>
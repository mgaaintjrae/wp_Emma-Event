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
    <header class="service-complete">

        <div class="navhome menu__area" id="navEvent">
        <?php get_template_part('/template-parts/header'); ?> 
        </div>

        <div class="header__title">
            <div class="big-title-page">Prestation Clé en Main</div>
            <svg class="icon">
                <use xlink:href="<?= get_stylesheet_directory_uri(); ?>/assets/img/svg/sprite.svg#divider_coeur">
                </use>
            </svg>
        </div>
        <div class="header__content">
            <div class="header__citation">
                <svg class="icon">
                    <use xlink:href="<?= get_stylesheet_directory_uri(); ?>/assets/img/svg/sprite.svg#quote">
                    </use>
                </svg>
                <p>Le bonheur est la seule chose qui se double si on le partage.</p>
            </div>
            <div class="header__author">
                <p> - Albert Schweitzer </p>
            </div>
        </div>

    </header>
    <?php
    if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<div class="container" id="breadcrumbs"> Vous êtes ici : ', '</div>');
    }
    ?>
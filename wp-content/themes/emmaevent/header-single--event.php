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
    <header class="single--event">

        <div class="navhome menu__area" id="nav">
        <?php get_template_part('/template-parts/header'); ?> 
        </div>

        <div class="header__title">
            <div class="big-title-page">Mes événements en détails</div>
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
                <p>L’amour ne se définit pas, ça se ressent, ça se vit. C’est une évidence.</p>
            </div>
            <div class="header__author">
                <p> - Amy Softpaws </p>
            </div>
        </div>
        
    </header>
    <?php
    if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<div class="container" id="breadcrumbs"> Vous êtes ici : ', '</div>');
    }
    ?>
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

    <?php get_template_part('/template-parts/preloader-top'); ?>

    <?php wp_body_open(); ?>
    <header class="blogNews">

        <div class="navhome menu__area" id="nav">
            <?php get_template_part('/template-parts/header'); ?>
        </div>

        <div class="header__title">
            <div class="big-title-page">Rechercher un événement...</div>
            <?php get_template_part('/template-parts/quote'); ?>
                <p>Le vrai amour te suit, sans jamais te dépasser .</p>
            </div>
            <div class="header__author">
                <p> - Sonia Lahsaini </p>
            </div>
        </div>

    </header>
    <?php
    if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<div class="container" id="breadcrumbs"> Vous êtes ici : ', '</div>');
    }
    ?>
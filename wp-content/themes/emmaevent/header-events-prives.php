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
    <header class="private">

        <div class="navhome menu__area" id="navEvent">
            <?php get_template_part('/template-parts/header'); ?>
        </div>

        <div class="header__title">
            <div class="big-title-page">Evénements Privés</div>
            <?php get_template_part('/template-parts/quote'); ?>
                <p>La sagesse écoute en souriant les réprimandes de la folie.</p>
            </div>
            <div class="header__author">
                <p> - Pierre-Claude-Victor Boiste </p>
            </div>
        </div>

    </header>
    <?php
    if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<div class="container" id="breadcrumbs"> Vous êtes ici : ', '</div>');
    }
    ?>
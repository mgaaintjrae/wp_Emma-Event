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
    <header class="home">

        <div class="navhome">
            <nav class="topbar">
                <div class="topbar__container">
                    <ul class="topbar__infos">
                        <li>
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="16.047" height="16.047" viewBox="0 0 16.047 16.047">
                                <path id="phone-alt-solid" d="M15.589,11.346l-3.51-1.5a.752.752,0,0,0-.878.216l-1.555,1.9A11.617,11.617,0,0,1,4.093,6.4l1.9-1.555a.75.75,0,0,0,.216-.878L4.7.461A.757.757,0,0,0,3.842.025L.583.777A.752.752,0,0,0,0,1.511,14.541,14.541,0,0,0,14.542,16.053a.752.752,0,0,0,.733-.583l.752-3.26a.761.761,0,0,0-.439-.865Z" transform="translate(0 -0.006)" fill="#777" />
                            </svg>06 25 37 34 34
                        </li>
                        <li>
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="10.5" height="14.738" viewBox="0 0 10.5 14.738">
                                <path id="map-marker-alt-solid" d="M4.71,14.441C.737,8.378,0,7.755,0,5.527A5.394,5.394,0,0,1,5.25,0,5.394,5.394,0,0,1,10.5,5.527c0,2.228-.737,2.851-4.71,8.914A.638.638,0,0,1,4.71,14.441ZM5.25,7.83a2.247,2.247,0,0,0,2.187-2.3,2.247,2.247,0,0,0-2.187-2.3,2.247,2.247,0,0,0-2.187,2.3A2.247,2.247,0,0,0,5.25,7.83Z" fill="#777" />
                            </svg>Paris & Région Parisienne</li>
                        <li>
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="12" height="9" viewBox="0 0 12 9">
                                <path id="envelope-solid" d="M11.773,66.972a.141.141,0,0,1,.227.11v4.793A1.125,1.125,0,0,1,10.875,73H1.125A1.125,1.125,0,0,1,0,71.875V67.084a.14.14,0,0,1,.227-.11c.525.408,1.221.926,3.612,2.662A4.193,4.193,0,0,0,6,70.752a4.2,4.2,0,0,0,2.163-1.116C10.554,67.9,11.248,67.38,11.773,66.972ZM6,70c.544.009,1.327-.684,1.72-.97,3.11-2.257,3.347-2.454,4.064-3.016A.561.561,0,0,0,12,65.57v-.445A1.125,1.125,0,0,0,10.875,64H1.125A1.125,1.125,0,0,0,0,65.125v.445a.564.564,0,0,0,.216.443c.717.56.954.759,4.064,3.016C4.673,69.316,5.456,70.009,6,70Z" transform="translate(0 -64)" fill="#777" />
                            </svg>
                            <a href=" mailto:emmanuelle.berthereau@emma-event.fr" title="me contacter">Emma-Event</a>
                        </li>
                    </ul>
                    <ul class="topbar__socials">
                        <li class="topbar__links">Me suivre :</li>
                        <li>
                            <a href="https://www.facebook.com/Emma-Event-114495040301571" target="_blank" rel="noopener noreferrer" title="Facebook">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" id="Bold" enable-background="new 0 0 24 24" height="512px" viewBox="0 0 24 24" width="512px">
                                    <g>
                                        <path d="m15.997 3.985h2.191v-3.816c-.378-.052-1.678-.169-3.192-.169-3.159 0-5.323 1.987-5.323 5.639v3.361h-3.486v4.266h3.486v10.734h4.274v-10.733h3.345l.531-4.266h-3.877v-2.939c.001-1.233.333-2.077 2.051-2.077z" data-original="#000000" class="active-path" data-old_color="#000000" />
                                    </g>
                                </svg>

                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/emma_event/?hl=fr" target="_blank" rel="noopener noreferrer" title="Instagram">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="12.061" height="12.059" viewBox="0 0 12.061 12.059">
                                    <path id="instagram-brands" d="M5.957,34.763a3.092,3.092,0,1,0,3.092,3.092A3.087,3.087,0,0,0,5.957,34.763Zm0,5.1a2.01,2.01,0,1,1,2.01-2.01,2.014,2.014,0,0,1-2.01,2.01ZM9.9,34.636a.721.721,0,1,1-.721-.721A.719.719,0,0,1,9.9,34.636Zm2.048.732a3.569,3.569,0,0,0-.974-2.527,3.592,3.592,0,0,0-2.527-.974c-1-.057-3.98-.057-4.975,0a3.587,3.587,0,0,0-2.527.971,3.58,3.58,0,0,0-.974,2.527c-.057,1-.057,3.98,0,4.975a3.569,3.569,0,0,0,.974,2.527,3.6,3.6,0,0,0,2.527.974c1,.057,3.98.057,4.975,0a3.569,3.569,0,0,0,2.527-.974,3.592,3.592,0,0,0,.974-2.527C12,39.345,12,36.364,11.944,35.368Zm-1.286,6.041a2.035,2.035,0,0,1-1.146,1.146,13.289,13.289,0,0,1-3.554.242A13.393,13.393,0,0,1,2.4,42.555a2.035,2.035,0,0,1-1.146-1.146,13.29,13.29,0,0,1-.242-3.554A13.393,13.393,0,0,1,1.256,34.3,2.035,2.035,0,0,1,2.4,33.154a13.289,13.289,0,0,1,3.554-.242,13.393,13.393,0,0,1,3.554.242A2.035,2.035,0,0,1,10.658,34.3a13.289,13.289,0,0,1,.242,3.554A13.282,13.282,0,0,1,10.658,41.409Z" transform="translate(0.075 -31.825)" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.pinterest.fr/emmanuelleberthereau/" target="_blank" rel="noopener noreferrer" title="Pinterest">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 511.977 511.977" style="enable-background:new 0 0 511.977 511.977;" xml:space="preserve" width="512px" height="512px">
                                    <g>
                                        <g>
                                            <g>
                                                <path d="M262.948,0C122.628,0,48.004,89.92,48.004,187.968c0,45.472,25.408,102.176,66.08,120.16    c6.176,2.784,9.536,1.6,10.912-4.128c1.216-4.352,6.56-25.312,9.152-35.2c0.8-3.168,0.384-5.92-2.176-8.896    c-13.504-15.616-24.224-44.064-24.224-70.752c0-68.384,54.368-134.784,146.88-134.784c80,0,135.968,51.968,135.968,126.304    c0,84-44.448,142.112-102.208,142.112c-31.968,0-55.776-25.088-48.224-56.128c9.12-36.96,27.008-76.704,27.008-103.36    c0-23.904-13.504-43.68-41.088-43.68c-32.544,0-58.944,32.224-58.944,75.488c0,27.488,9.728,46.048,9.728,46.048    S144.676,371.2,138.692,395.488c-10.112,41.12,1.376,107.712,2.368,113.44c0.608,3.168,4.16,4.16,6.144,1.568    c3.168-4.16,42.08-59.68,52.992-99.808c3.968-14.624,20.256-73.92,20.256-73.92c10.72,19.36,41.664,35.584,74.624,35.584    c98.048,0,168.896-86.176,168.896-193.12C463.62,76.704,375.876,0,262.948,0z" data-original="#000000" class="active-path" data-old_color="#000000"/>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="menu__area">
                <?php get_template_part('/template-parts/header'); ?>
            </div>
        </div>

        <div class="header__title">
            <div class="big-title">Emma Event <br> Wedding & Event Planner</div>
            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="140.201" height="12.506" viewBox="0 0 140.201 12.506"><g transform="translate(-841.5 -541)"><path d="M12.893,32.822a3.817,3.817,0,0,0-5.209.38l-.55.567-.55-.567a3.817,3.817,0,0,0-5.209-.38,4.008,4.008,0,0,0-.276,5.8L6.5,44.2a.875.875,0,0,0,1.265,0l5.4-5.577a4.006,4.006,0,0,0-.274-5.8Z" transform="translate(904.514 509.033)" fill="#fff"/><line x2="55.015" transform="translate(926.685 547.211)" fill="none" stroke="#fff" stroke-width="2"/><line x2="55.015" transform="translate(841.5 547.211)" fill="none" stroke="#fff" stroke-width="2"/></g></svg>
            <h1>Organisation de mariage et évènements professionnels</h1>
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
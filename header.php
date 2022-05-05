<?php

/**
 * Header File
 * 
 * @package iputuagussetiawan
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <?php
    wp_head();
    ?>
</head>

<body data-scroll-container <?php body_class(); ?>>
    <?php
    if (function_exists('wp_body_open')) {
        wp_body_open();
    }
    ?>
    <nav class="left-sidebar">
        <div id="humburger-menu-desktop">
            <span id="hamburger" class="burger">
                <svg width="45" height="45" viewBox="0 0 100 100">
                    <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                    <path class="line line2" d="M 20,50 H 80" />
                    <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
                </svg>
            </span>
        </div>

        <?php
        get_template_part('template-parts/component/sidebar', 'socialicon');
        ?>
    </nav>

    <div id="side-menu" class="side-menu">
        <ul class="side-menu__inner">
            <li class="side-menu__item"><a class="side-menu__link" href="#home">Home</a></li>
            <li class="side-menu__item"><a class="side-menu__link" href="#about">About</a></li>
            <li class="side-menu__item"><a class="side-menu__link" href="#portfolio">Portfolio</a></li>
            <li class="side-menu__item"><a class="side-menu__link" href="#news">News</a></li>
            <li class="side-menu__item"><a class="side-menu__link" href="#contact">Contact</a></li>
        </ul>
    </div>
    <div class="page-wrapper">
        <header>
            <nav class="navbar navbar-custom navbar-expand-lg">
                <div class="container-fluid">
                    <div id="humburger-menu-mobile" class="humburger-menu__mobile-holder">

                    </div>
                    <a class="navbar-brand" href="#"><i class="ri-quill-pen-line"></i>AG-d'sign</a>
                    <div class="navbar-action">
                        <a href="#" id="theme-button" class="btn-navbar ri-moon-line change-theme"></a>
                        <a href="#" id="search-button" class="btn-navbar btn-nav-search" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </nav>
        </header>
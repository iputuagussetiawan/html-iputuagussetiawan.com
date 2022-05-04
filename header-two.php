<?php

/**
 * Header File
 * 
 * @package Timedoor
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet" />
    <?php
    wp_head();
    ?>
</head>

<body <?php body_class(); ?>>
    <div id="preloader"></div>
    <div class="up">
        <a href="#" class="scrollup text-center"><i class="fas fa-chevron-up"></i></a>
    </div>
    <?php
    if (function_exists('wp_body_open')) {
        wp_body_open();
    }
    ?>
    <header id="header_id" class="main_header header_style_two">
        <?php
        get_template_part('template-parts/layout/header', 'top-two');
        get_template_part('template-parts/layout/header', 'main-two');
        get_template_part('template-parts/layout/header', 'mobile');
        ?>
    </header>
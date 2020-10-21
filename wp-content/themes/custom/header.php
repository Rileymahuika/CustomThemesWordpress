<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Plugin API hook - Sets up Header and prepairs page-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php
    wp_body_open();
    ?>
<header>
    <?php get_custom_logo();?>
    <h1>Hello I am a Header</h1>

    <!-- Displays Wordpresses nav menu -->
    <?php wp_nav_menu(); ?>
    <hr>
</header>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header id="header" class="main_header">
        <div class="container">
            <a href="<?=get_bloginfo('url');?>" class="main-logo-wrap"></a>
            <div class="menu-outer-wrap">
                <?php
                wp_nav_menu(array(
                    'theme_location'=>'main_header'
                ));
                ?>
            </div>
        </div>
    </header>
    <main>


<?php
/*
 * Template name: Landing
 */

get_header(); ?>


    <?php

    echo get_template_part('page-parts/home/section1');
    echo get_template_part('page-parts/home/section2');
    echo get_template_part('page-parts/home/section3');
    echo get_template_part('page-parts/home/section4');
    echo get_template_part('page-parts/home/section5');
    echo get_template_part('page-parts/home/section6');

    ?>


<?php get_footer(); ?>
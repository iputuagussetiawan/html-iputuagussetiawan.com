<?php

/*
    Template Name: Gallery Page
*/
?>
<?php get_header(); ?>
<main>
    <?php
    get_template_part('template-parts/section/section', 'page-header');
    get_template_part('template-parts/section/section', 'gallery');
    ?>
</main>
<?php get_footer(); ?>
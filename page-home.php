<?php
/*
    Template Name: Home
*/
?>
<?php get_header(); ?>
<main>
    <?php
    get_template_part('template-parts/section/section', 'banner');
    get_template_part('template-parts/section/section', 'about');
    get_template_part('template-parts/section/section', 'ourwork');
    get_template_part('template-parts/section/section', 'news');
    get_template_part('template-parts/section/section', 'faqs');
    ?>
</main>
<?php get_footer(); ?>
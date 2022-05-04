<?php
/*
    Template Name: Home two
*/
?>
<?php get_header('two'); ?>
<main>
    <?php
    $showBanner = get_field('show_banner', 'theme-setting');

    if ($showBanner) :
        get_template_part('template-parts/section/section', 'banner-two');
    endif;
    get_template_part('template-parts/section/section', 'driven-solution');
    get_template_part('template-parts/section/section', 'about-two');
    get_template_part('template-parts/section/section', 'service-category');
    get_template_part('template-parts/section/section', 'gallery');
    get_template_part('template-parts/section/section', 'benefit');
    get_template_part('template-parts/section/section', 'team');
    get_template_part('template-parts/section/section', 'blog');
    ?>
</main>
<?php get_footer(); ?>
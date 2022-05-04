<?php
/*
    Template Name: Service
*/
?>

<?php get_header(); ?>
<main>
    <?php
    $showPageHeader = get_field('show_page_header_service', 'theme-setting');
    $showService = get_field('show_service', 'theme-setting');
    $showServiceCounter = get_field('show_service_counter', 'theme-setting');
    $showServiceCategory = get_field('show_service_category', 'theme-setting');
    $showCall = get_field('show_call_us_service', 'theme-setting');
    $showWhyUs = get_field('show_why_us_service', 'theme-setting');
    $showBrand = get_field('show_brand', 'theme-setting');

    if ($showPageHeader) :
        get_template_part('template-parts/section/section', 'page-header');
    endif;

    if ($showService) :
        get_template_part('template-parts/section/section', 'driven-solution');
    endif;

    if ($showServiceCounter) :
        get_template_part('template-parts/section/section', 'service-counter');
    endif;

    if ($showServiceCategory) :
        get_template_part('template-parts/section/section', 'service-category');
    endif;

    if ($showWhyUs) :
        get_template_part('template-parts/section/section', 'whyus');
    endif;

    if ($showBrand) :
        get_template_part('template-parts/section/section', 'partner');
    endif;



    ?>
</main>
<?php get_footer(); ?>
<?php
/*
    Template Name: About
*/
?>

<?php get_header(); ?>
<main>
    <?php
    $showPageHeader = get_field('show_page_header_about', 'theme-setting');
    $showSiteInfo = get_field('show_site_info_about', 'theme-setting');
    $showWelcome = get_field('show_welcome_about', 'theme-setting');
    $showFeature = get_field('show_features_about', 'theme-setting');
    $showTeam = get_field('show_teams_about', 'theme-setting');
    $showBenefit = get_field('show_benefit_about', 'theme-setting');
    $showTestimonial = get_field('show_testimonial_about', 'theme-setting');

    if ($showPageHeader) :
        get_template_part('template-parts/section/section', 'page-header');
    endif;

    if ($showSiteInfo) :
        get_template_part('template-parts/section/section', 'site-info');
    endif;

    if ($showWelcome) :
        get_template_part('template-parts/section/section', 'about');
    endif;

    if ($showFeature) :
        get_template_part('template-parts/section/section', 'feature');
    endif;

    if ($showTeam) :
        get_template_part('template-parts/section/section', 'team');
    endif;

    if ($showBenefit) :
        get_template_part('template-parts/section/section', 'benefit');
    endif;

    if ($showTestimonial) :
        get_template_part('template-parts/section/section', 'testimonial');
    endif;
    ?>
</main>
<?php get_footer(); ?>
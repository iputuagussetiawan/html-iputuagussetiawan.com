<?php
$companyPhoneNumber = get_field('company_phone', 'company-setting');
$companyPhoneNumberLink = get_field('company_phone_link', 'company-setting');
$bannerImage = get_sub_field('banner_image');
if ($bannerImage) :
    $urlBannerImage = $bannerImage['url'];
    $sizeBannerImage = 'banner-home';
    $CustomBannerImage = $bannerImage['sizes'][$sizeBannerImage];
endif;
?>
<div class="main-slider-img-text slide-type-one pera-content headline position-relative">
    <div class="slider-img-bg img-zooming" data-background="<?php echo esc_url($CustomBannerImage); ?>"></div>
    <div class="background_overlay"></div>
    <div class="container">
        <div class="slider-content-box">
            <span class="title-tag text-uppercase"><img src="<?php echo get_template_directory_uri() ?>/assets/icon/icon5.svg" alt="<?php echo get_sub_field('banner_title'); ?>"><?php echo get_sub_field('banner_subtitle'); ?></span>
            <h1><?php echo get_sub_field('banner_title'); ?>
            </h1>
            <p><?php echo get_sub_field('banner_description'); ?>
            </p>
            <div class="slide-btn-1">
                <?php
                // Loop over sub repeater rows.
                if (have_rows('bannerLinkList')) :
                    while (have_rows('bannerLinkList')) : the_row();
                ?>
                        <a href="<?php echo get_sub_field('banner_link'); ?>"><?php echo get_sub_field('banner_link_text'); ?> <i class="flaticon-next"></i></a>
                <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
</div>
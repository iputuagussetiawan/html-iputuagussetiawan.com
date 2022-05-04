<?php

$pageServiceID = get_field('service_link', 'page_link')->ID;
$serviceLink = get_permalink($pageServiceID);

$pageContactID = get_field('contact_link', 'page_link')->ID;
$contactLink = get_permalink($pageContactID);

$sectionTitleCategoryService = get_field('service_category_title', $pageServiceID);
$sectionSubTitleCategoryService = get_field('service_category_subtitle', $pageServiceID);
$sectionCategoryServiceIcon = get_field('service_category_icon', $pageServiceID);

if ($sectionCategoryServiceIcon) :
    $urlCategoryServiceIcon = $sectionCategoryServiceIcon['url'];
    $sizeCategoryServiceIcon = 'thumbnail';
    $customCategoryServiceIcon = $sectionCategoryServiceIcon['sizes'][$sizeCategoryServiceIcon];
endif;

$bgSection = get_field('service_category_background', $pageServiceID);
if ($bgSection) :
    $urlBgSection = $bgSection['url'];
endif;

$contactBoxTitle = get_field('contact_box_title', $pageContactID);
$contactBoxDescription = get_field('contact_box_description', $pageContactID);
$contactBoxThumbnail = get_field('contact_box_thumbnail', $pageContactID);
$contactBoxText = get_field('contact_box_button_text', $pageContactID);



$PhoneNumber = get_field('company_phone', 'company-setting');
$phoneNumberLink = get_field('company_phone_link', 'company-setting');

if ($contactBoxThumbnail) :
    $urlBoxThumbnail = $contactBoxThumbnail['url'];
    $sizeBoxThumbnail = 'thumbnail';
    $customBoxThumbnail = $contactBoxThumbnail['sizes'][$sizeBoxThumbnail];
endif;
?>
<section id="feature" class="feature-section feature-style-two position-relative" data-background="<?= $urlBgSection; ?>">
    <div class="background_overlay"></div>
    <div class="container">
        <div class="section-title-left text-center">
            <span class="title-tag"><img src="<?= $urlCategoryServiceIcon; ?>" alt="<?= $sectionTitleCategoryService; ?>"><?= $sectionSubTitleCategoryService; ?></span>
            <h2><?= $sectionTitleCategoryService; ?></h2>
        </div>
        <!-- title -->
        <div class="features-content-two">
            <div id="features-slide-id" class="feature-slide-content">
                <?php
                $taxonomy_objects = get_object_taxonomies('service', 'objects');
                $out = array();
                foreach ($taxonomy_objects as $taxonomy_slug => $taxonomy) :
                    $terms = get_terms($taxonomy_slug, 'hide_empty=0');

                    if (!empty($terms)) :
                        foreach ($terms as $term) :
                            $categoryName = $term->name;
                            $categorySlug = $term->slug;
                            $categoryDescription = $term->description;
                            //$term = get_term(10, 'series');
                            // $term_link = get_term_link($term->term_id, 'ourwork');

                            // var_dump($term_link);
                            $icon = get_field('taxonomy_service_icon', $term->taxonomy . '_' . $term->term_id);
                            if ($icon) :
                                $urlIcon = $icon['url'];
                                $sizeIcon = 'thumbnail';
                                $customIcon = $icon['sizes'][$sizeIcon];
                            endif;
                ?>
                            <div class="feature-slide-icon-text  text-center">
                                <div class="feature-slide-icon">
                                    <img src="<?= $urlIcon ?>" alt="<?= $categoryName ?>">
                                </div>
                                <div class="feature-slide-text pera-content headline">
                                    <h3><?= $categoryName ?></h3>
                                    <p><?= $categoryDescription; ?></p>
                                </div>
                            </div>
                <?php
                        endforeach;
                    endif;
                endforeach;
                ?>
            </div>
        </div>
        <!-- /features slide -->
        <div class="features-call-action position-relative">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <img src="<?= $urlBoxThumbnail; ?>" alt="<?= $contactBoxTitle ?> " class="img-fluid">
                </div>
                <div class="col-md-9 p-2">
                    <div class="feature-call-content headline pera-content">
                        <h3><?= $contactBoxTitle ?> <span><?= $PhoneNumber; ?></span></h3>
                        <p><?= $contactBoxDescription; ?>
                        </p>
                        <a href="tel:<?= $phoneNumberLink; ?>"><?= $contactBoxText; ?><i class="flaticon-next"></i></a>
                    </div>
                </div>
            </div>
            <div class="call-icon-bg">
                <i class="icon-call-in"></i>
            </div>
        </div>
    </div>
</section>
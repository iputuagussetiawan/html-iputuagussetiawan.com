<?php
$pageGalleryID = get_field('gallery_link', 'page_link')->ID;
$galleryLink = get_permalink($pageGalleryID);
$sectionTitleGallery = get_field('section_title_gallery', $pageGalleryID);
$sectionSubTitleGallery = get_field('section_subtitle_gallery', $pageGalleryID);
$sectionGalleryIcon = get_field('section_icon', $pageGalleryID);
$ourGallery = get_field('our_gallery', $pageGalleryID);

if ($sectionGalleryIcon) :
    $urlSectionGalleryIcon = $sectionGalleryIcon['url'];
    $sizeSectionGalleryIcon = 'thumbnail';
    $customSectionGalleryIcon = $sectionGalleryIcon['sizes'][$sizeSectionGalleryIcon];
endif;
?>
<section id="project" class="project-section project-section-two pt-5">
    <div class="container">
        <div class="project-text-content">
            <div class="row">
                <div class="col-lg-5 col-md-12">
                    <div class="section-title-left">
                        <span class="title-tag"><img src="<?= $urlSectionGalleryIcon; ?>" alt="<?= $sectionSubTitleGallery; ?>"><?= $sectionSubTitleGallery; ?></span>
                        <h2><?= $sectionTitleGallery; ?></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid project-filtering zoom-gallery clearfix row" data-isotope="{ &quot;masonry&quot;: { &quot;columnWidth&quot;: 0 } }">
            <?php
            if ($ourGallery) :
                foreach ($ourGallery as $image) : ?>
                    <div class="grid-item grid-item-width2 branding fashion graphic" data-category="branding fashion graphic">
                        <div class="projecct-img relative-position">
                            <img src="<?php echo esc_url($image['sizes']['image-gallery']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <div class="project-item-text pera-content headline">
                                <h3><a href="#"><?php echo esc_attr($image['alt']); ?></a></h3>
                            </div>
                            <a class="popup-project" data-lightbox="roadtrip" href="<?php echo esc_url($image['sizes']['image-gallery-big']); ?>"></a>
                        </div>
                    </div>
            <?php
                endforeach;
            endif;
            ?>

        </div>
    </div>
</section>
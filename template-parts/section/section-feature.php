<?php
$pageAboutID = get_field('about_link', 'page_link')->ID;
$aboutLink = get_permalink($pageAboutID);
$sectionTitleFeature = get_field('section_feature_title', $pageAboutID);
$sectionSubTitleFeature = get_field('section_feature_subtitle', $pageAboutID);
$sectionFeatureIcon = get_field('section_feature_icon', $pageAboutID);

$sectionFeatureBG = get_field('section_feature_background', $pageAboutID);
if ($sectionFeatureIcon) :
    $urlSectionFeatureIcon = $sectionFeatureIcon['url'];
    $sizeSectionFeatureIcon = 'thumbnail';
    $customSectionFeatureIcon = $sectionFeatureIcon['sizes'][$sizeSectionAboutIcon];
endif;

if ($sectionFeatureBG) :
    $urlSectionFeatureBG = $sectionFeatureBG['url'];
endif;
?>
<section id="features" class="features-section position-relative" data-background="<?php echo $urlSectionFeatureBG; ?>">
    <div class="background_overlay"></div>
    <div class="container">
        <div class="section-title-middle text-center">
            <span class="title-tag">
                <img src="<?php echo esc_url($urlSectionFeatureIcon); ?>" alt="<?= $sectionTitleFeature; ?>"><br>
                <?= $sectionSubTitleFeature; ?>
            </span>
            <h2><?= $sectionTitleFeature; ?></h2>
        </div>
        <!-- /title -->
        <div class="features-content">
            <div class="row">
                <?php if (have_rows('feature_list', $pageAboutID)) :
                    while (have_rows('feature_list', $pageAboutID)) : the_row();
                ?>
                        <div class="col-lg-4 col-md-6">
                            <?php get_template_part('template-parts/component/cards/card', 'feature'); ?>
                        </div>
                <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
</section>
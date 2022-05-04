<?php
$pageAboutID = get_field('about_link', 'page_link')->ID;
$aboutLink = get_permalink($pageAboutID);
$sectionTitleBenefit = get_field('section_title_benefit', $pageAboutID);
$sectionSubTitleBenefit = get_field('section_subtitle_benefit', $pageAboutID);
$sectionSubNoteBenefit = get_field('section_note_benefit', $pageAboutID);
$sectionIconBenefit = get_field('section_icon_benefit', $pageAboutID);
$sectionImageBenefit = get_field('section_background_benefit', $pageAboutID);

if ($sectionIconBenefit) :
    $urlSectionIconBenefit = $sectionIconBenefit['url'];
    $sizeSectionIconBenefit = 'thumbnail';
    $customSectionIconBenefit = $sectionIconBenefit['sizes'][$sizeSectionIconBenefit];
endif;

if ($sectionImageBenefit) :
    $urlSectionImageBenefit = $sectionImageBenefit['url'];
    $sizeSectionImageBenefit = 'full';
    $customSectionImageBenefit = $sectionImageBenefit['sizes'][$sizeSectionImageBenefit];
endif;
?>

<section id="eltron-info" class="eltron-info-section" data-background="<?= $urlSectionImageBenefit; ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="info-content clearfix">
                    <div class="section-title-left">
                        <span class="title-tag"><img src="<?= $urlSectionIconBenefit; ?>" alt="<?= $sectionTitleBenefit; ?>"><?= $sectionSubTitleBenefit; ?></span>
                        <h2><?= $sectionTitleBenefit; ?></h2>
                    </div>
                    <div class="eltron-info-text pera-content">
                        <span>"<?= $sectionSubNoteBenefit; ?>"</span>
                        <?php
                        if (have_rows('section_benefit_list')) :
                            while (have_rows('section_benefit_list')) : the_row();
                                get_template_part('template-parts/component/cards/card', 'benefit');
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
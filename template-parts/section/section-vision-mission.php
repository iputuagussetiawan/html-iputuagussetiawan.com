<?php
$pageAboutID = get_field('about_link', 'page_link')->ID;
$aboutLink = get_permalink($pageAboutID);
$sectionTitleVision = get_field('section_visionmission_title', $pageAboutID);
$sectionSubTitleVision = get_field('section_visionmission_subtitle', $pageAboutID);
$sectionVision = get_field('visionandmision', $pageAboutID);
$sectionIconVision = get_field('section_vision_mission_icon', $pageAboutID);

if ($sectionIconVision) :
    $urlSectionIconVision = $sectionIconVision['url'];
    $sizeSectionIconVision = 'thumbnail';
    $customSectionIconVision = $sectionIconVision['sizes'][$sizeSectionIconVision];
endif;

?>
<div class="mission-area">
    <div class="mission-text">
        <div class="section-title-left">
            <span class="title-tag"><img src="<?= $urlSectionIconVision; ?>" alt="<?= $sectionSubTitleVision; ?>"><?= $sectionSubTitleVision; ?></span>
            <h2>“ <?= $sectionVision; ?> ”</h2>
        </div>
    </div>
</div>
<?php
$pageAboutID = get_field('about_link', 'page_link')->ID;
$pageServiceID = get_field('service_link', 'page_link')->ID;
$aboutLink = get_permalink($pageAboutID);
$sectionTitleAbout = get_field('section_whoweare_title', $pageAboutID);
$sectionSubTitleAbout = get_field('section_whoweare_subtitle', $pageAboutID);
$sectionAboutIcon = get_field('section_whoweare_icon', $pageAboutID);
$sectionAboutBG = get_field('section_whoweare_background', $pageAboutID);
$sectionAboutSortDescription = get_field('about_sort_description_', $pageAboutID);
$sectionAboutGallery = get_field('about_gallery', $pageAboutID);

$videoTextDrivenSolution = get_field('driven_solution_video_title', $pageServiceID);
$videoDrivenSolution = get_field('driven_solution_video', $pageServiceID);

if ($sectionAboutIcon) :
    $urlSectionAboutIcon = $sectionAboutIcon['url'];
    $sizeSectionAboutIcon = 'thumbnail';
    $customSectionAboutIcon = $sectionAboutIcon['sizes'][$sizeSectionAboutIcon];
endif;

if ($sectionAboutBG) :
    $urlSectionAboutBG = $sectionAboutBG['url'];
    $sizeSectionAboutBG = 'thumbnail';
    $customSectionAboutBG = $sectionAboutBG['sizes'][$sizeSectionAboutIcon];
endif;
?>
<section id="about" class="about-section about-section-two position-relative">
    <div class="about-section-two__image-container">
        <img src="<?php echo esc_url($urlSectionAboutBG); ?>" alt="bg about two">
    </div>
    <div class="container">
        <div class="about-content">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="about-text">
                        <div class="section-title-left">
                            <span class="title-tag"><img src="<?php echo esc_url($urlSectionAboutIcon); ?>" alt=""><?= $sectionSubTitleAbout; ?></span>
                            <h2><?= $sectionTitleAbout; ?></h2>
                        </div>
                        <!-- title -->
                        <div class="about-content pera-content">
                            <div class="about-text1">
                                <?= $sectionAboutSortDescription; ?>
                            </div>
                            <div class="about-counter">
                                <?php
                                $counter = 0;
                                $max = 2;
                                if (have_rows('service_count_list', $pageServiceID)) :
                                    while ((have_rows('service_count_list', $pageServiceID)) and ($counter < $max)) : the_row();
                                        get_template_part('template-parts/component/cards/card', 'service-counter-two');
                                        $counter++;
                                    endwhile;
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-img clearfix">
                        <?php
                        if ($sectionAboutGallery) :
                            $gallryNo = 1;
                            foreach ($sectionAboutGallery as $image) :
                                $imageSize = '';
                                if ($gallryNo == 1) {
                                    $imageSize = 'image-about-large';
                                } elseif ($gallryNo == 2) {
                                    $imageSize = 'image-about-medium';
                                } else {
                                    $imageSize = 'image-about-small';
                                }
                        ?>
                                <div class="abt-img-set" data-tilt data-tilt-max="10">
                                    <img src="<?php echo esc_url($image['sizes'][$imageSize]); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                </div>
                        <?php
                                $gallryNo++;
                            endforeach;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
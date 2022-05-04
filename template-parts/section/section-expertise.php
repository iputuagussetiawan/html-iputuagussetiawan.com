<?php
$pageAboutID = get_field('about_link', 'page_link')->ID;
$aboutLink = get_permalink($pageAboutID);
$sectionTitleExpertise = get_field('section_expertise_title', $pageAboutID);
$sectionSubTitleExpertise = get_field('section_expertise_subtitle', $pageAboutID);
$sectionIconExpertise = get_field('section_expertise_icon', $pageAboutID);
$sectionDescriptionExpertise = get_field('expertise_sort_description', $pageAboutID);
$sectionExpertiseProgress = get_field('our_progress_list', $pageAboutID);
$sectionExpertiseGallery = get_field('expertise_gallery', $pageAboutID);

if ($sectionIconExpertise) :
    $urlSectionIconExpertise = $sectionIconExpertise['url'];
    $sizeSectionIconExpertise = 'thumbnail';
    $customSectionIconExpertise = $sectionIconExpertise['sizes'][$sizeSectionIconExpertise];
endif;


?>
<section id="expertise" class="expertise-section position-relative">
    <div class="container">
        <div class="expertise-content">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="expertise-text">
                        <div class="section-title-left">
                            <span class="title-tag"><img src="<?= $urlSectionIconExpertise; ?>" alt="<?= $sectionSubTitleExpertise; ?>"><?= $sectionSubTitleExpertise; ?></span>
                            <h2><?= $sectionTitleExpertise; ?></h2>
                        </div>
                        <div class="expertise-text-details">
                            <?= $sectionDescriptionExpertise; ?>
                        </div>
                        <div class="expertise-skill-progress">
                            <?php
                            if (have_rows('our_progress_list', $pageAboutID)) :
                                while (have_rows('our_progress_list', $pageAboutID)) : the_row();
                                    get_template_part('template-parts/component/cards/card', 'experties');
                                endwhile;
                            endif;
                            ?>
                        </div>
                    </div>
                    <div class="expertise-indicator-icon">
                        <?php
                        if (have_rows('our_progress_list', $pageAboutID)) :
                            while (have_rows('our_progress_list', $pageAboutID)) : the_row();
                                get_template_part('template-parts/component/cards/card', 'experties-icon');
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ex-carousel">
        <div id="expertise_carouselid" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php
                $exNo = 0;
                if ($sectionExpertiseGallery) :
                    foreach ($sectionExpertiseGallery as $image) :
                        if ($exNo == 0) :

                ?>
                            <div class="carousel-item active">
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_url($image['alt']); ?>">
                            </div>
                        <?php
                        else :
                        ?>
                            <div class="carousel-item">
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_url($image['alt']); ?>">
                            </div>
                <?php
                        endif;
                        $exNo++;
                    endforeach;
                endif;
                ?>
            </div>
        </div>
    </div>
</section>
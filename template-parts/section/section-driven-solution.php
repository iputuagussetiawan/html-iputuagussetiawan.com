<?php
$pageAboutID = get_field('about_link', 'page_link')->ID;
$aboutLink = get_permalink($pageAboutID);
$pageServiceID = get_field('service_link', 'page_link')->ID;


$serviceLink = get_permalink($pageServiceID);
$sectionTitleDrivenSolution = get_field('driven_solution_title', $pageServiceID);
$sectionSubTitleDrivenSolution = get_field('driven_solution_subtitle', $pageServiceID);
$videoTextDrivenSolution = get_field('driven_solution_video_title', $pageServiceID);
$videoDrivenSolution = get_field('driven_solution_video', $pageServiceID);
$noteDrivenSolution = get_field('driven_solution_note', $pageServiceID);
$sectionDrivenSolutionIcon = get_field('driven_solution_icon', $pageServiceID);

if ($sectionDrivenSolutionIcon) :
    $urlDrivenSolutionIcon = $sectionDrivenSolutionIcon['url'];
    $sizeDrivenSolutionIcon = 'thumbnail';
    $customDrivenSolutionIcon = $sectionDrivenSolutionIcon['sizes'][$sizeDrivenSolutionIcon];
endif;
?>
<section id="driven-solution" class="driven-solution-section service-page-driven position-relative">
    <div class="container">
        <div class="section-title-left text-center">
            <span class="title-tag"><img src="<?= $urlDrivenSolutionIcon; ?>" alt="<?= $sectionSubTitleDrivenSolution; ?>"><?= $sectionSubTitleDrivenSolution; ?></span>
            <h2><?= $sectionTitleDrivenSolution; ?></h2>
        </div>
        <!-- title -->
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
            <div class="driven-text-content">
                <div class="driven-text pera-content text-center">
                    <p><?= $noteDrivenSolution; ?></p>
                    <div class="about-btn text-uppercase">

                        <a class="video_box" href="<?= $videoDrivenSolution; ?>">
                            <div class="play-btn-icon">
                                <i class="fas fa-play-circle"></i>
                            </div>
                            <span><?= $videoTextDrivenSolution; ?> </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
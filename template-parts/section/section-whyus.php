<?php
$pageAboutID = get_field('about_link', 'page_link')->ID;
$aboutLink = get_permalink($pageAboutID);
$sectionTitleWhyUs = get_field('section_why_title', $pageAboutID);
$sectionSubTitleWhyUs = get_field('section_why_subtitle', $pageAboutID);
$sectionIconWhyUs = get_field('section_why_us_icon', $pageAboutID);

if ($sectionIconWhyUs) :
    $urlSectionIconWhyUs = $sectionIconWhyUs['url'];
    $sizeSectionIconWhyUs = 'thumbnail';
    $customSectionIconWhyUs = $sectionIconWhyUs['sizes'][$sizeSectionWorkIcon];
endif;

?>

<section id="advantage" class="advantage-section">
    <div class="container">
        <div class="section-title-middle text-center">
            <span class="title-tag">
                <img src="<?= $urlSectionIconWhyUs; ?>" alt="<?= $sectionTitleWhyUs; ?>">
                <?= $sectionSubTitleWhyUs; ?>
            </span>
            <h2><?= $sectionTitleWhyUs; ?></h2>
        </div>
        <!-- /title -->
        <div class="advantage-content">
            <div class="row">
                <?php
                $noWhyUs = 0;
                if (have_rows('why_us_list', $pageAboutID)) :
                    while (have_rows('why_us_list', $pageAboutID)) : the_row();
                        if ($noWhyUs % 2 == 0) :
                            get_template_part('template-parts/component/cards/card', 'whyus');
                        else :
                            get_template_part('template-parts/component/cards/card', 'whyus-two');
                        endif;
                        $noWhyUs++;
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
</section>
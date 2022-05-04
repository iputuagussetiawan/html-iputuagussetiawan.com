<?php
$pageAboutID = get_field('about_link', 'page_link')->ID;
$aboutLink = get_permalink($pageAboutID);
$sectionTitleTeam = get_field('section_title_team', $pageAboutID);
$sectionSubTitleTeam = get_field('section_subtitle_team', $pageAboutID);
$sectionIconTeam = get_field('section_icon_team', $pageAboutID);
$sectionImageTeam = get_field('section_image_team', $pageAboutID);

if ($sectionIconTeam) :
    $urlSectionIconTeam = $sectionIconTeam['url'];
    $sizeSectionIconTeam = 'thumbnail';
    $customSectionIconTeam = $sectionIconTeam['sizes'][$sizeSectionIconTeam];
endif;

?>
<section id="eltron-team" class="eltron-team-section about-page-team">
    <div class="container">
        <div class="section-title-left text-center">
            <span class="title-tag"><img src="<?= $urlSectionIconTeam; ?>" alt="><?= $sectionTitleTeam; ?>"><?= $sectionSubTitleTeam; ?></span>
            <h2><?= $sectionTitleTeam; ?></h2>
        </div>
        <div class="team-content">
            <div class="row">
                <?php
                $args = array(
                    'post_type' => 'team',
                    'post_status' => 'publish',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'asc',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'team_division',
                            'field' => 'term_id',
                            'terms' => 19
                        )
                    )
                );
                $loop = new WP_Query($args);
                if ($loop->have_posts()) :
                    while ($loop->have_posts()) : $loop->the_post();
                        get_template_part('template-parts/component/cards/card', 'team');
                    endwhile;
                    wp_reset_postdata();
                endif; ?>
            </div>
        </div>
    </div>
</section>
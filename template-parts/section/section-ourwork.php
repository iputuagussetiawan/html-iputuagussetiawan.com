<?php
$pageWorkID = get_field('ourwork_link', 'page_link')->ID;
$worktLink = get_permalink($pageWorkID);
$pageAboutID = get_field('about_link', 'page_link')->ID;
$aboutLink = get_permalink($pageAboutID);
$sectionTitleWork = get_field('section_work_title', $pageAboutID);
$sectionSubTitleWork = get_field('section_work_subtitle', $pageAboutID);
$sectionWorkIcon = get_field('section_work_icon', $pageAboutID);

if ($sectionWorkIcon) :
    $urlSectionWorkIcon = $sectionWorkIcon['url'];
    $sizeSectionWorkIcon = 'thumbnail';
    $customSectionWorkIcon = $sectionWorkIcon['sizes'][$sizeSectionWorkIcon];
endif;

?>
<section id="project" class="project-section">
    <div class="container">
        <div class="project-text-content">
            <div class="row">
                <div class="col-lg-5 col-md-12">
                    <div class="section-title-left">
                        <span class="title-tag"><img src="<?= $urlSectionWorkIcon; ?>" alt="<?= $sectionTitleWork; ?>"><?= $sectionSubTitleWork; ?></span>
                        <h2><?= $sectionTitleWork; ?></h2>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="project-filter-btn ul-li text-center">
                        <div class="button-group portfolio text-uppercase clearfix">
                            <button class="filter-button is-checked" data-filter="*">all</button>
                            <?php
                            $taxonomy_objects = get_object_taxonomies('ourwork', 'objects'); // <--- change cpt with the custom post type
                            $out = array();
                            foreach ($taxonomy_objects as $taxonomy_slug => $taxonomy) {
                                $terms = get_terms($taxonomy_slug, 'hide_empty=0');
                                if (!empty($terms)) {
                                    foreach ($terms as $term) {
                                        $categoryName = $term->name;
                                        $categorySlug = $term->slug;
                            ?>
                                        <button class="filter-button" data-filter=".<?= $categorySlug; ?>"><?= $categoryName ?></button>
                            <?php
                                    }
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid project-filtering zoom-gallery clearfix row" data-isotope="{ &quot;masonry&quot;: { &quot;columnWidth&quot;: 0 } }">
            <!-- <div class="grid-sizer"></div> -->
            <?php
            $args = array(
                'post_type' => 'ourwork',
                'post_status' => 'publish',
                'posts_per_page' => 8,
                'orderby' => 'date',
                'order' => 'asc',
            );
            $loop = new WP_Query($args);
            if ($loop->have_posts()) :
                while ($loop->have_posts()) : $loop->the_post();
                    get_template_part('template-parts/component/cards/card', 'work');
                endwhile;
                wp_reset_postdata();
            endif; ?>
        </div>
        <div class="project-more-btn text-uppercase">
            <a href="<?= $worktLink; ?>">View More <i class="flaticon-next"></i></a>
        </div>
    </div>
</section>
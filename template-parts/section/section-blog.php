<?php
$pageNewsID = get_field('news_link', 'page_link')->ID;
$newsLink = get_permalink($pageNewsID);
$sectionTitleNews = get_field('section_title_news', $pageNewsID);
$sectionSubTitleNews = get_field('section_subtitle_news', $pageNewsID);
$sectionNewsIcon = get_field('section_icon_news', $pageNewsID);
$sectionNewsSortDescription = get_field('section_description_news', $pageNewsID);

if ($sectionNewsIcon) :
    $urlSectionNewsIcon = $sectionNewsIcon['url'];
    $sizeSectionNewsIcon = 'thumbnail';
    $customSectionNewsIcon = $sectionNewsIcon['sizes'][$sizeSectionNewsIcon];
endif;
?>
<section id="blog" class="blog-section relative-position" data-background="assets/img/background/ft-bg.jpg">
    <div class="background_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="blog-left-content">
                    <div class="section-title-left">
                        <span class="title-tag"><img src="<?= $urlSectionNewsIcon; ?>" alt=""><?= $sectionSubTitleNews; ?></span>
                        <h2><?= $sectionTitleNews; ?></h2>
                    </div>
                    <div class="blog-text-details">
                        <p><?= $sectionNewsSortDescription; ?></p>
                        <div class="b-read-more-btn text-center text-uppercase">
                            <a href="<?= $newsLink; ?>">read more <i class="flaticon-next"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="blog-post-content clearfix">
                    <?php
                    $blogs = new WP_Query(array(
                        'posts_per_page' => 2,
                        'post_type' => 'post',
                        'post_status'   => 'publish',
                        'orderby' => 'date',
                        'order' => 'DESC',
                    ));
                    if ($blogs->have_posts()) :
                        while ($blogs->have_posts()) :
                            $blogs->the_post();
                            get_template_part('template-parts/component/cards/card', 'blog-mini');
                        endwhile;
                        wp_reset_postdata();
                    else :
                    ?>
                        <h3>Data Not Found</h3>
                    <?php
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
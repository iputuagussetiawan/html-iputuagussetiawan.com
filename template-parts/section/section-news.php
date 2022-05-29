<?php
$pageNewsID = get_field('news_link', 'page_link')->ID;
$newsLink = get_permalink($pageNewsID);
$sectionSubTitleNews = get_field('section_subtitle', $pageNewsID);
$sectionTitleNews = get_field('section_title', $pageNewsID);
?>
<section id="news" class="news" data-scroll-section>
    <div class="container-fluid section-padding">
        <p class="section-subtitle"><?php echo $sectionSubTitleNews ?></p>
        <h2 class="section-title"><?php echo $sectionTitleNews ?></h2>
        <div class="card-post-list">
            <?php
            $blogs = new WP_Query(array(
                'posts_per_page' => 8,
                'post_type' => 'post',
                'post_status'   => 'publish',
                'orderby' => 'date',
                'order' => 'DESC',
            ));
            if ($blogs->have_posts()) :
                while ($blogs->have_posts()) :
                    $blogs->the_post();
                    get_template_part('template-parts/component/cards/card', 'news');
                endwhile;
                wp_reset_postdata();
            else :
            ?>
                <h3>Data Not Found</h3>
            <?php
            endif;
            ?>

        </div>

        <div class="btn-wrapper text-center mt-5">
            <a href="<?php echo $newsLink; ?>" class="btn-primary btn-ripple">Read More</a>
        </div>
    </div>
</section>
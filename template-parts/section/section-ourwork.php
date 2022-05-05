<?php
$pageWorkID = get_field('ourwork_link', 'page_link')->ID;
$worktLink = get_permalink($pageWorkID);
$sectionSubTitleWork = get_field('section_subtitle', $pageWorkID);
$sectionTitleWork = get_field('section_title', $pageWorkID);
?>
<section id="portfolio" class="portfolio" data-scroll-section>
    <div class="container-fluid section-padding--top">
        <p class="section-subtitle"><?php echo $sectionSubTitleWork ?></p>
        <h2 class="section-title"><?php echo $sectionTitleWork ?></h2>
        <div class="portfolio-list">
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
                $no = 1;
                while ($loop->have_posts()) : $loop->the_post();
                    $args = array('cardNumber' => $no);
                    get_template_part('template-parts/component/cards/card', 'work',  $args);

                    $no++;
                endwhile;
                wp_reset_postdata();
            endif; ?>
        </div>
        <div class="btn-wrapper text-center mt-5">
            <a href="#" class="btn-primary btn-ripple">Read More</a>
        </div>
    </div>
</section>
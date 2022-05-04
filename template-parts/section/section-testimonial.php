<?php
$pageAboutID = get_field('about_link', 'page_link')->ID;
$aboutLink = get_permalink($pageAboutID);
$sectionTitleTestimonial = get_field('section_title_testimonial', $pageAboutID);
$sectionSubTitleTestimonial = get_field('section_subtitle_testimonial', $pageAboutID);
$sectionIconTestimonial = get_field('section_icon_testimonial', $pageAboutID);
$sectionImageTestimonial = get_field('section_image_testimonial', $pageAboutID);

if ($sectionIconTestimonial) :
    $urlSectionIconTestimonial = $sectionIconTestimonial['url'];
    $sizeSectionIconTestimonial = 'thumbnail';
    $customSectionIconTestimonial = $sectionIconTestimonial['sizes'][$sizeSectionIconTestimonial];
endif;

if ($sectionImageTestimonial) :
    $urlSectionImageTestimonial = $sectionImageTestimonial['url'];
    $sizeSectionImageTestimonial = 'full';
    $customSectionImageTestimonial = $sectionImageTestimonial['sizes'][$sizeSectionIconTestimonial];
endif;
?>
<section id="testimonial" class="testimonial-section">
    <div class="container">
        <div class="section-title-middle text-center">
            <div class="title-tag">
                <img src="<?= $urlSectionIconTestimonial; ?>" alt="<?= $sectionTitleTestimonial; ?>"><br />
                <?= $sectionSubTitleTestimonial; ?>
            </div>
            <h2><?= $sectionTitleTestimonial; ?></h2>
        </div>
        <div class="testimonial-content">
            <div class="testimonial-part testimonial-img">
                <img src="<?= $urlSectionImageTestimonial; ?>" alt=" <?= $sectionSubTitleTestimonial; ?>">
            </div>
            <div class="testimonial-part testimonial-text-slide">
                <div id="testimonial-slideid" class="testimonial-slide owl-carousel">
                    <?php
                    $args = array(
                        'post_type' => 'testimonial',
                        'post_status' => 'publish',
                        'posts_per_page' => -1,
                        'orderby' => 'date',
                        'order' => 'asc',
                    );
                    $loop = new WP_Query($args);
                    if ($loop->have_posts()) :
                        while ($loop->have_posts()) : $loop->the_post();
                            get_template_part('template-parts/component/cards/card', 'testimonial');
                        endwhile;
                        wp_reset_postdata();
                    endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
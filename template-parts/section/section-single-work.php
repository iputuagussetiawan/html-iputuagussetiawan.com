<?php
$post_date = get_the_date('F j, Y');
$post_title = get_the_title();
?>
<section id="service-details" class="service-details-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <?php get_template_part('template-parts/layout/sidebar', 'work'); ?>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="service-single-content">
                    <h3><?php echo $post_title ?></h3>
                    <?php the_content() ?>
                </div>
            </div>
        </div>
    </div>
</section>
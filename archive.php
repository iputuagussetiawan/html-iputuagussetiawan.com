<?php get_header(); ?>
<main>
    <?php
    get_template_part('template-parts/section/section', 'page-header-newsarchive');
    ?>
    <section id="blog-page-area" class="blog-page-area-section">
        <div class="container">
            <div class="blog-page-content">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <?php
                        if (have_posts()) :
                            while (have_posts()) :
                                the_post();
                                get_template_part('template-parts/component/cards/card', 'blog');
                            endwhile;
                            wp_reset_postdata();
                        else :
                        ?>
                            <div class="col-12"> No Data Found</div>
                        <?php
                        endif;
                        ?>
                    </div>
                    <!-- /post item -->
                    <div class="col-lg-4 col-md-12">
                        <?php get_template_part('template-parts/layout/sidebar', 'blog'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
<?php get_header(); ?>
<main>
    <section id="breadcrumb" class="breadcrumb-section position-relative" data-background="<?php echo get_template_directory_uri() ?>/assets/img/background/bgSearch.jpg">
        <div class="background_overlay"></div>
        <div class="container">
            <div class="breadcrumb-content headline">
                <h2 class="breadcrumb-title"> Search Result For '<?php echo get_search_query(); ?>'</h2>
                <div class="breadcrumb_item ul-li">
                    <ul class="breadcrumb">
                        <li><a href="<?php echo site_url(); ?>">Home</a></li>
                        <li class="breadcrumb-item active"><?php echo get_search_query(); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="blog-page-area" class="blog-page-area-section">
        <div class="container">
            <div class="blog-page-content">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <?php
                        if (have_posts()) :

                            while (have_posts()) :
                                the_post();
                                get_template_part('template-parts/component/cards/card', 'blog');
                            endwhile;
                            wp_reset_postdata();
                        else :
                        ?>
                            <div class="col-12">
                                <p> THERE ARE NO RESULT FOR YOUR SEARCH <?php echo get_search_query(); ?></p>
                            </div>
                        <?php
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
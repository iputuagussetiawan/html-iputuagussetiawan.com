<?php get_header(); ?>
<main>
    <section id="breadcrumb" class="breadcrumb-section position-relative" data-background="<?php echo get_template_directory_uri() . '/assets/img/background/bgSearch.jpg' ?>">
        <div class="background_overlay"></div>
        <div class="container">
            <div class="breadcrumb-content headline">
                <h2 class="breadcrumb-title"> <?php the_archive_title(); ?></h2>
                <div class="breadcrumb_item ul-li">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= site_url(); ?>">Home</a></li>
                        <li class="breadcrumb-item active"> <?php the_archive_title(); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="blog-page-area" class="blog-page-area-section">
        <div class="container">
            <div class="blog-page-content">
                <div class="row">
                    <!-- /post item -->
                    <div class="col-lg-4 col-md-12">
                        <?php get_template_part('template-parts/layout/sidebar', 'work'); ?>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <?php
                        if (have_posts()) :
                            while (have_posts()) :
                                the_post();
                                get_template_part('template-parts/component/cards/card', 'ourwork');
                            endwhile;
                            wp_reset_postdata();
                        else :
                        ?>
                            <div class="col-12"> No Data Found</div>
                        <?php
                        endif;
                        ?>
                        <div class="el-blog-pegination text-center ul-li">
                            <?php
                            $pagination = paginate_links(array(
                                'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                                'format' => '?paged=%#%',
                                'current' => max(1, get_query_var('paged')),
                                'total' => $blogs->max_num_pages,
                                'prev_text' => '<i class="far fa-angle-left"></i>',
                                'next_text' => '<i class="far fa-angle-right"></i>',
                                'type' => 'array',
                                'show_all' => true
                            ));
                            ?>
                            <?php if (!empty($pagination)) : ?>
                                <ul class="">
                                    <?php foreach ($pagination as $key => $page_link) : ?>
                                        <li <?php
                                            $link = htmlspecialchars($page_link);
                                            $link = str_replace(' current', '', $link);
                                            if (strpos($page_link, 'current') !== false) {
                                                echo 'class="active"';
                                            }
                                            ?>>
                                            <?php
                                            if ($link) {
                                                $link = str_replace('page-numbers', ' ', $link);
                                            }
                                            echo htmlspecialchars_decode($link);
                                            ?>
                                        </li>
                                    <?php endforeach ?>
                                </ul>
                            <?php endif ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>



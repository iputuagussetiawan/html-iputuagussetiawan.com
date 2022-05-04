<?php
/*
    Template Name: Our Work
*/
?>

<?php get_header(); ?>
<main>
    <?php
    get_template_part('template-parts/section/section', 'page-header');
    ?>
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
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $blogs = new WP_Query(array(
                            'posts_per_page' => 5,
                            'post_type' => 'ourwork',
                            'post_status'   => 'publish',
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'paged'   => $paged
                        ));
                        if ($blogs->have_posts()) :
                            while ($blogs->have_posts()) :
                                $blogs->the_post();
                                get_template_part('template-parts/component/cards/card', 'ourwork');
                            endwhile;
                            wp_reset_postdata();
                        else :
                        ?>
                            <h3>Data Not Found</h3>
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
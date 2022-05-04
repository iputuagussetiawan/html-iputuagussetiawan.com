<?php get_header(); ?>
<section class="page-header">
    <div class="page-header__bg" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/backgrounds/page-header-1-1.jpg);"></div>
    <div class="container">
        <h1>Search Result For '<?php echo get_search_query(); ?>'</h1>
        <ul class="thm-breadcrumb list-unstyled dynamic-radius">
            <li><a href="<?php echo site_url(); ?>">Home</a></li>
            <li>-</li>
            <li><span><?php echo get_search_query(); ?>'</span></li>
        </ul>
    </div>
</section>
<section class="search-result section-padding">
    <div class="container">
        <div class="row post-list">
            <?php
            if (have_posts()) :
                // Start the Loop.
                while (have_posts()) :
            ?>
                    <div class="col-md-4 mb-4">
                        <?php
                        the_post();
                        get_template_part('template-parts/card', 'blog');
                        // End the loop.
                        ?>
                    </div>
                <?php
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
        <?php
        global $wp_query;
        $big = 99999999;
        $pagination = paginate_links(array(
            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format' => '?paged=%#%',
            'current' => max(1, get_query_var('paged')),
            'total' => $wp_query->max_num_pages,
            'prev_text' => '<i class="fa fa-angle-left"></i>',
            'next_text' => '<i class="fa fa-angle-right"></i>',
            'type' => 'array',
            'show_all' => true
        ));
        ?>
        <?php if (!empty($pagination)) : ?>
            <nav class="pt-5">
                <ul class="pagination justify-content-center">
                    <?php foreach ($pagination as $key => $page_link) : ?>
                        <li class="page-item
                            <?php
                            $link = htmlspecialchars($page_link);
                            $link = str_replace(' current', '', $link);
                            if (strpos($page_link, 'current') !== false) {
                                echo ' active';
                            }
                            ?>
                            ">
                            <?php
                            if ($link) {
                                $link = str_replace('page-numbers', 'page-link', $link);
                            }
                            echo htmlspecialchars_decode($link);
                            ?>
                        </li>
                    <?php endforeach ?>
                </ul>
            </nav>
        <?php endif ?>
    </div>
</section>
<?php get_footer(); ?>
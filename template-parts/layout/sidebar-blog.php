<div class="blog-sidebar">
    <div class="blog-sidebar-widget headline pera-content">
        <div class="search-widget">
            <h3 class="widget-title">Search</h3>
            <form action="<?= esc_url(home_url('/')) ?>" method="GET">
                <input type="text" name="s" id="s_general" placeholder="Search here..." value="<?= get_search_query() ?>">
                <button type="submit"><i class="fas fa-search"></i> </button>
            </form>
        </div>
    </div>
    <!-- /sidebar-widget -->
    <div class="blog-sidebar-widget headline pera-content">
        <div class="category-widget ul-li-block">
            <h3 class="widget-title">Categories</h3>
            <ul>
                <?php
                $categories = get_categories();
                foreach ($categories as $category) {
                    echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>

    <div class="blog-sidebar-widget headline pera-content">
        <div class="popular-tag-widget ul-li">
            <h3 class="widget-title">Tag News</h3>
            <ul>
                <?php
                $tags = get_tags(array(
                    'hide_empty' => false
                ));

                foreach ($tags as $tag) {
                    echo '<li><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>

    <div class="blog-sidebar-widget headline pera-content">
        <div class="recent-post-widget">
            <h3 class="widget-title">Recent Posts</h3>
            <div class="latest-blog-widget">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $blogs = new WP_Query(array(
                    'posts_per_page' => 3,
                    'post_type' => 'post',
                    'post_status'   => 'publish',
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'paged'   => $paged

                ));
                if ($blogs->have_posts()) :
                    while ($blogs->have_posts()) :
                        $blogs->the_post();
                        get_template_part('template-parts/component/cards/card', 'sidebar-blog');
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

    <?php
    get_template_part('template-parts/component/widget/widget', 'callus');
    ?>

</div>
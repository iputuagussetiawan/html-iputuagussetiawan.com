<section id="partner" class="partner-section">
    <div class="container">
        <div id="partner-slide-id" class="partner-slider">
            <?php
            $args = array(
                'post_type' => 'partners',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'orderby' => 'date',
                'order' => 'asc',
            );
            $loop = new WP_Query($args);
            if ($loop->have_posts()) :
                while ($loop->have_posts()) : $loop->the_post();
                    get_template_part('template-parts/component/cards/card', 'partner');
                endwhile;
                wp_reset_postdata();
            endif; ?>
        </div>
    </div>
</section>
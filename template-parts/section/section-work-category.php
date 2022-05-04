<section id="service" class="service-section">
    <div class="service-content">
        <?php
        $taxonomy_objects = get_object_taxonomies('ourwork', 'objects'); // <--- change cpt with the custom post type
        $out = array();
        foreach ($taxonomy_objects as $taxonomy_slug => $taxonomy) :
            $terms = get_terms($taxonomy_slug, 'hide_empty=0');

            if (!empty($terms)) :
                foreach ($terms as $term) :
                    $categoryName = $term->name;
                    $categorySlug = $term->slug;
                    $icon = get_field('taxonomy_work_thumbanil', $term->taxonomy . '_' . $term->term_id);
                    if ($icon) :
                        $urlIcon = $icon['url'];
                        $sizeIcon = 'category-work-thumbnail';
                        $customIcon = $icon['sizes'][$sizeIcon];
                    else :
                        $urlIcon = get_template_directory_uri() . '/assets/img/service/ser1.jpg';
                    endif;
        ?>
                    <div class="service-pic-text position-relative">
                        <div class="service-pic">
                            <img src="<?= $urlIcon ?>" alt="<?= $categoryName ?>">
                        </div>
                        <div class="service-text text-center text-uppercase">
                            <h3><?= $categoryName ?></h3>
                            <a href="<?= get_term_link($term); ?>">Read More <i class="flaticon-next"></i></a>
                        </div>
                    </div>
        <?php
                endforeach;
            endif;
        endforeach;
        ?>
    </div>
</section>
<div class="service-sidebar-widget">
    <div class="service-cat-widget ul-li-block">
        <h3 class="widget-title">Services We Offer</h3>
        <ul>
            <?php
            $taxonomy_objects = get_object_taxonomies('ourwork', 'objects'); // <--- change cpt with the custom post type
            $out = array();
            foreach ($taxonomy_objects as $taxonomy_slug => $taxonomy) :
                $terms = get_terms($taxonomy_slug, 'hide_empty=0');
                if (!empty($terms)) :
                    foreach ($terms as $term) :
                        $categoryName = $term->name;
                        $categorySlug = $term->slug;
                        $categoryLink = get_term_link($term);
            ?>
                        <li><a href="<?= $categoryLink; ?>"><?= $categoryName ?></a></li>
            <?php
                    endforeach;
                endif;
            endforeach;
            ?>
        </ul>
    </div>
</div>
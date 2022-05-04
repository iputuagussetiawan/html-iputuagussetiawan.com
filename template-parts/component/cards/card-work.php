<?php
$pageAboutID = get_field('about_link', 'page_link')->ID;
$postID = get_the_id();
$post_terms = wp_get_post_terms($postID, 'work_category');
if (empty($post_terms) || !is_array($post_terms)) {
    return;
}

$output = '';
foreach ($post_terms as $key => $post_term) {
    $output .= ' ' . $post_term->slug;
}

$workThumbnail = get_field('work_thumbnail', $postID);
$workThumbnailType = get_field('work_thumbnail_type', $postID);

if ($workThumbnail) :
    $urlWorkThumbnail = $workThumbnail['url'];
    $sizeWorkSmall = 'work-small';
    $sizeWorkMedium = 'work-medium';
    $sizeWorkLarge = 'work-large';
    $gridItem = '';
    if ($workThumbnailType['value'] == 'small') {
        $customWorkThumbnail = $workThumbnail['sizes'][$sizeWorkSmall];
        $gridItem = 'grid-item-width';
    } elseif ($workThumbnailType['value'] == 'medium') {
        $customWorkThumbnail = $workThumbnail['sizes'][$sizeWorkMedium];
        $gridItem = 'grid-item-width';
    } elseif ($workThumbnailType['value'] == 'large') {
        $customWorkThumbnail = $workThumbnail['sizes'][$sizeWorkLarge];
        $gridItem = 'grid-item-big';
    } else {
        $customWorkThumbnail = $workThumbnail['sizes'][$sizeWorkMedium];
        $gridItem = 'grid-item-width';
    }
endif;
?>
<div class="grid-item <?= $gridItem; ?> <?= $output; ?>" data-category="<?= $output; ?>">
    <div class="projecct-img relative-position">
        <img src="<?php echo esc_url($customWorkThumbnail); ?>" alt="<?php the_title() ?>">
        <div class="project-item-text pera-content headline">
            <?php
            $terms = get_the_terms($post->ID, 'work_category');
            if ($terms) {
                foreach ($terms as $term) {
                    echo '<p>' . $term->name . '</p>';
                }
            }
            ?>
            <!-- <p>Wind Turbine</p> -->
            <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
        </div>
        <a class="popup-project" data-lightbox="roadtrip" href="<?php echo esc_url($urlWorkThumbnail); ?>"></a>
    </div>
</div>
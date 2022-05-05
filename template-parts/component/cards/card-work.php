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
if ($workThumbnail) :
    $urlWorkThumbnail = $workThumbnail['url'];
endif;
?>
<a href="<?php the_permalink() ?>" target="_blank" rel="noopener" class="card-porfolio ">
    <div class="card-porfolio__content">
        <div class="card-porfolio__itemBg" style="background-color:#8160def0"></div>
        <article class="card-porfolio__text">
            <h3 class="card-porfolio__name">#<?php echo __($args['cardNumber']); ?></h3>
            <p class="card-porfolio__desc"><?php the_title() ?></p>
        </article>
    </div>
    <div class="card-porfolio__image">
        <img src="<?php echo esc_url($urlWorkThumbnail); ?>" alt="<?php the_title() ?>">
    </div>
</a>
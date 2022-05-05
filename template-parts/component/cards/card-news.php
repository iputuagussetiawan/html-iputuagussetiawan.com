<?php
$post_date = get_the_date('F j, Y');
$post_title = get_the_title();
?>
<div class="card-post">
    <div class="card-post__special-list">
        <span class="card-post__special-item"><?php echo $post_date; ?></span>
    </div>
    <div class="card-post__image-container">
        <?php if (has_post_thumbnail()) : ?>
            <img src="<?php the_post_thumbnail_url('blog-thumbnail'); ?>" class="card-post__image img-fluid" alt="<?php the_title() ?>">
        <?php endif; ?>
    </div>
    <div class="card-post__info-container">
        <h3 class="card-post__title"><?= $post_title; ?></h3>
        <p class="card-post__description">
            <?php if (has_excerpt()) {
                echo get_the_excerpt();
            } else {
                echo wp_trim_words(get_the_content(), 18);
            } ?>
        </p>
    </div>
    <div class=" card-post__by">Post By: <?php echo get_the_author_meta('first_name'); ?>
    </div>
    <a href="<?php the_permalink(); ?>" class="card-post__button">More</a>
</div>
<?php
$post_date = get_the_date('F j, Y');
$post_title = get_the_title();
?>
<div class="blog-img-content">
    <div class="blog-img float-left">
        <?php if (has_post_thumbnail()) : ?>
            <img src="<?php the_post_thumbnail_url('blog-thumbnail-small'); ?>" alt="<?php the_title() ?>">
        <?php endif; ?>
    </div>
    <div class="blog-text headline">
        <h3> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <span><?= $post_date; ?></span>
    </div>
</div>
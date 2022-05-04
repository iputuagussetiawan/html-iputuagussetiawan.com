<?php
$post_date = get_the_date('F j, Y');
$post_title = get_the_title();
?>
<div class="blog-post-item">
    <div class="blog-post-pic">
        <?php if (has_post_thumbnail()) : ?>
            <img src="<?php the_post_thumbnail_url('blog-thumbnail'); ?>" alt="<?php the_title() ?>">
        <?php endif; ?>
        <a class="blog-linker" href="<?php the_permalink(); ?>"></a>
    </div>
    <div class="blog-post-text">
        <h3><a href="<?php the_permalink(); ?>"><?= $post_title; ?></a></h3>
        <div class="blog-meta">
            <a href="#"><i class="icon-user"></i><?php echo get_the_author(); ?></a>
            <a href="#"><i class="icon-calendar"></i><?php echo $post_date; ?></a>
        </div>
        <div class="blog-more text-uppercase">
            <a href="<?php the_permalink(); ?>">full story <i class="flaticon-next"></i></a>
        </div>
    </div>
</div>
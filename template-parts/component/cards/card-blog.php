<?php
$post_date = get_the_date('F j, Y');
$post_title = get_the_title();
?>
<div class="blog-page-post-item">
    <div class="blog-post-thumbnile-text post-no-image pera-content headline">
        <div class="blog-post-thumb-img position-relative">
            <div class="blog-category text-uppercase">
                <?php
                $categories = get_the_category();
                foreach ($categories as $cat) :
                ?>
                    <a href="<?php echo get_category_link($cat->term_id); ?>"><?php echo $cat->name; ?></a>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="blog-post-meta">
            <a href="#"><i class="far fa-user"></i> <?php echo get_the_author(); ?></a>
            <a href="#"><i class="far fa-calendar-alt"></i><?php echo $post_date; ?> </a>
            <a href="#"><i class="far fa-comment"></i>Comments <?php echo get_comments_number(); ?> </a>
        </div>
        <div class="blog-post-text">
            <h3><a href="<?php the_permalink(); ?>"><?php echo $post_title; ?></a></h3>
            <div class="blog-post-content">
                <?php if (has_excerpt()) {
                    echo get_the_excerpt();
                } else {
                    echo wp_trim_words(get_the_content(), 60);
                } ?>
            </div>
        </div>
        <div class="excerpt-more">
            <a href="<?php the_permalink(); ?>">FUll story <img src="<?php echo get_template_directory_uri() ?>/assets/img/arrow2.png" alt="FUll story"></a>
        </div>
    </div>
</div>
<?php
$post_date = get_the_date('F j, Y');
$post_title = get_the_title();
?>
<section id="blog-details" class="blog-page-area-section blog-details-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="blog-details-content">
                    <div class="blog-page-post-item">
                        <div class="blog-post-thumbnile-text pera-content headline">
                            <div class="blog-post-thumb-img position-relative">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title() ?>">
                                <?php endif; ?>

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
                                <a href="#"><i class="far fa-user"></i><?php echo get_the_author(); ?></a>
                                <a href="#"><i class="far fa-calendar-alt"></i><?= $post_date; ?></a>
                                <a href="#"><i class="far fa-comment"></i>Comments (<?php echo get_comments_number(); ?> )</a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-details-text-content headline">
                        <h2><?= $post_title; ?></h2>
                        <div class="post-content">
                            <?php the_content() ?>
                        </div>
                        <div class="blog-share-category clearfix">
                            <div class="blog-category-tag clearfix">
                                <?php
                                $categories = get_the_category();
                                foreach ($categories as $cat) :
                                ?>
                                    <a href="<?php echo get_category_link($cat->term_id); ?>"><?php echo $cat->name; ?></a>
                                <?php endforeach; ?>
                            </div>
                            <div class="blog-share float-right">
                                <a href="#"><i class="fas fa-share"></i> <span>Share This Post</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-comment-area headline pera-content">
                        <?php
                        //comments_template();
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <?php get_template_part('template-parts/layout/sidebar', 'blog'); ?>
            </div>
        </div>
    </div>
</section>
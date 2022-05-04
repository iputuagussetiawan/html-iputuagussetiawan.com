<?php
$pageNewsID = get_field('news_link', 'page_link')->ID;
$newsLink = get_permalink($pageNewsID);
$pageHeaderImage = get_field('image_page_header', $pageNewsID);
if ($pageHeaderImage) :
    $urlHeaderImage = $pageHeaderImage['url'];
endif;
?>
<section id="breadcrumb" class="breadcrumb-section position-relative" data-background="<?= esc_url($urlHeaderImage); ?>">
    <div class="background_overlay"></div>
    <div class="container">
        <div class="breadcrumb-content headline">
            <h2 class="breadcrumb-title"> <?php the_archive_title(); ?></h2>
            <div class="breadcrumb_item ul-li">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= site_url(); ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?= $newsLink; ?>">News</a></li>
                    <li class="breadcrumb-item active"><?php the_archive_title(); ?></li>
                </ul>
            </div>
        </div>
    </div>
</section>
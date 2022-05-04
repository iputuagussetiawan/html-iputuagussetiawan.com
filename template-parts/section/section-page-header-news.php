<?php
$pageNewsID = get_field('news_link', 'page_link')->ID;
$newsLink = get_permalink($pageNewsID);

$pageHeaderImage = get_field('image_page_header', $pageNewsID);
$pageHeaderTitle = get_field('page_header_title');
$pageHeaderSortDescription = get_field('page_header_sort_description');
if ($pageHeaderTitle) {
    $pageHeaderTitle = $pageHeaderTitle;
} else {
    $pageHeaderTitle = get_the_title();
}
if ($pageHeaderImage) :
    $urlHeaderImage = $pageHeaderImage['url'];
endif;
?>
<section id="breadcrumb" class="breadcrumb-section position-relative" data-background="<?= esc_url($urlHeaderImage); ?>">
    <div class="background_overlay"></div>
    <div class="container">
        <div class="breadcrumb-content headline">
            <h2 class="breadcrumb-title"> <?= $pageHeaderTitle; ?></h2>
            <div class="breadcrumb_item ul-li">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= site_url(); ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?= $newsLink; ?>">News</a></li>
                    <li class="breadcrumb-item active"> <?= $pageHeaderTitle; ?></li>
                </ul>
            </div>
        </div>
    </div>
</section>
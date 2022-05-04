<?php
$pageworkID = get_field('ourwork_link', 'page_link')->ID;
$workLink = get_permalink($pageworkID);

$pageHeaderImage = get_field('image_page_header', $pageworkID);
$pageHeaderTitle = get_field('page_header_title', $pageworkID);
$pageHeaderSortDescription = get_field('page_header_sort_description', $pageworkID);
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
                    <li class="breadcrumb-item"><a href="<?= $workLink; ?>">Our Work</a></li>
                    <li class="breadcrumb-item active"> <?= $pageHeaderTitle; ?></li>
                </ul>
            </div>
        </div>
    </div>
</section>
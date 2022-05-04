<?php
$pageAboutID = get_field('about_link', 'page_link')->ID;
$whyUsTitle = get_sub_field('why_us_title', $pageAboutID);
$whyUsIcon = get_sub_field('why_us_image', $pageAboutID);
if ($whyUsIcon) :
    $urlWhyUsIcon = $whyUsIcon['url'];
    $sizeWhyUsIcon = 'thumbnail';
    $CustomWhyUsIcon = $whyUsIcon['sizes'][$sizeWhyUsIcon];
endif;
?>
<div class="col-lg-3 col-md-6">
    <div class="advantage-img-text">
        <div class="advantage-img">
            <img src="<?php echo esc_url($urlWhyUsIcon); ?>" alt="<?= $whyUsTitle; ?>">
        </div>
        <div class="advantage-text text-center text-uppercase headline">
            <h3><?= $whyUsTitle; ?></h3>
        </div>
    </div>
</div>
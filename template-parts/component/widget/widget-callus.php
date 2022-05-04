<?php
$pageContactID = get_field('contact_link', 'page_link')->ID;
$contactLink = get_permalink($pageContactID);

$pageNewsID = get_field('news_link', 'page_link')->ID;
$newsLink = get_permalink($pageNewsID);

$contactMeTitle = get_field('contact_me_title', $pageNewsID);
$contactMeDescription = get_field('contact_me_description', $pageNewsID);
$showAds = get_field('news_show_ads', $pageNewsID);
if ($showAds) :
?>
    <div class="add-widget text-center pera-content position-relative" data-background="<?php echo get_template_directory_uri() ?>/assets/img/background/bcbg.jpg">
        <div class="background_overlay"></div>
        <h3><?= $contactMeTitle; ?></h3>
        <p><?= $contactMeDescription; ?></p>
        <a href="<?= $contactLink; ?>">GET in Touch <img src="<?= get_template_directory_uri() ?>/assets/img/arrow3.png" alt="GET in Touch"></a>
    </div>
<?php
endif;
?>
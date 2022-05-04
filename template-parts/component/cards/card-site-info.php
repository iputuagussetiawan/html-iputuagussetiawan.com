<?php
$siteInfoTitle = get_sub_field('site_info_title');
$siteInfoLink = get_sub_field('site_info_link');
$siteInfoIcon = get_sub_field('site_info_icon');
if ($siteInfoIcon) :
    $urlSiteInfoIcon = $siteInfoIcon['url'];
    $sizeSiteInfoIcon = 'thumbnail';
    $CustomSiteInfoIcon = $siteInfoIcon['sizes'][$sizeSiteInfoIcon];
endif;
?>
<div class="site-info-icon-text position-relative">
    <div class="site-info-icon float-left">
        <img src="<?php echo esc_url($urlSiteInfoIcon); ?>" alt="<?= $siteInfoTitle; ?>">
    </div>
    <div class="site-info-text headline">
        <h3><?= $siteInfoTitle; ?></h3>
    </div>
    <div class="site-info-arrow">
        <a href="<?= $siteInfoLink; ?>"><i class="icon-arrow-right"></i></a>
    </div>
</div>
<?php
$cardFeatureTitle = get_sub_field('feature_title');
$cardFeatureSubtitle = get_sub_field('feature_subtitle');
$cardFeatureDescription = get_sub_field('feature_description');
$cardFeatureIcon = get_sub_field('feature_icon');
$cardFeatureIconHover = get_sub_field('feature_icon_hover');
if ($cardFeatureIcon) :
    $urlCardFeatureIcon = $cardFeatureIcon['url'];
    $sizeCardFeatureIcon = 'thumbnail';
    $CustomCardFeatureIcon = $cardFeatureIcon['sizes'][$sizeCardFeatureIcon];
endif;

if ($cardFeatureIconHover) :
    $urlCardFeatureIconHover = $cardFeatureIconHover['url'];
    $sizeCardFeatureIconHover = 'thumbnail';
    $CustomCardFeatureIconHover = $cardFeatureIconHover['sizes'][$sizeCardFeatureIconHover];
endif;
?>
<div class="features-icon-text text-center position-relative">
    <div class="features-icon">
        <img src="<?php echo esc_url($urlCardFeatureIcon); ?>" alt="<?= $cardFeatureTitle; ?>">
    </div>
    <div class="features-text headline pera-content">
        <h3><?= $cardFeatureTitle; ?></h3>
        <p><?= $cardFeatureSubtitle; ?></p>
    </div>
    <div class="features-hover-content">
        <div class="fh-icon-bg">
            <img src="<?php echo esc_url($urlCardFeatureIconHover); ?>" alt="<?= $cardFeatureTitle; ?>">
        </div>
        <div class="features-hover-text headline pera-content">
            <h3><?= $cardFeatureTitle; ?></h3>
            <p><?= $cardFeatureDescription; ?></p>
            <!-- <div class="fh-more">
                <a href="#"><i class="icon-arrow-down"></i></a>
            </div> -->
        </div>
    </div>
</div>
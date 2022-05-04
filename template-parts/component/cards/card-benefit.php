<?php
$benefitTitle = get_sub_field('benefit_title');
$benefitDescription = get_sub_field('benefit_description');
$benefitIcon = get_sub_field('benefit_icon_');
if ($benefitIcon) :
    $urlBenefitIcon = $benefitIcon['url'];
    $sizeBenefitIcon = 'thumbnail';
    $CustomBenefitIcon = $benefitIcon['sizes'][$sizeBenefitIcon];
endif;
?>
<div class="eltron-info-icon-text">
    <div class="eltron-info-icon text-center">
        <img src="<?php echo esc_url($urlBenefitIcon); ?>" alt="<?= $benefitTitle; ?>">
    </div>
    <div class="eltron-info-text-details pera-content headline">
        <h3><?= $benefitTitle; ?></h3>
        <p><?= $benefitDescription; ?></p>
    </div>
</div>
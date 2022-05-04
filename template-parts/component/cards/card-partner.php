<?php
$partnerImage = get_field('partner_logo');
$partnerLink = get_field('partner_link');
if ($partnerImage) :
    $urlPartner = $partnerImage['url'];
    $altPartner = $partnerImage['alt'];
    $sizePartner = 'thumbnail';
    $CustomPartner = $partnerImage['sizes'][$sizePartner];
endif;
?>
<div class="partner-img">
    <img src="<?= $urlPartner; ?>" alt="<?= $altPartner; ?>">
</div>
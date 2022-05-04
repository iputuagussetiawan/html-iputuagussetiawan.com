<?php
$counterTitle = get_sub_field('service_count_title');
$counterValue = get_sub_field('service_count_value');
$counterUnit = get_sub_field('service_count_unit');
$counterIcon = get_sub_field('service_count_icon');

if ($counterIcon) :
    $urlCounterIcon = $counterIcon['url'];
    $sizeCounterIcon = 'thumbnail';
    $CustomCounterIcon = $counterIcon['sizes'][$sizeCounterIcon];
endif;
?>
<div class="col-lg-3 col-md-6">
    <div class="about-counter-text-number headline">
        <h4><?= $counterTitle; ?></h4>
        <div class="counter-icon float-left">
            <img src="<?= $urlCounterIcon; ?>" alt="">
        </div>
        <div class="counter-number">
            <h4 class="counter"><?= $counterValue; ?></h4><strong><?= $counterUnit; ?></strong>
        </div>
    </div>
</div>
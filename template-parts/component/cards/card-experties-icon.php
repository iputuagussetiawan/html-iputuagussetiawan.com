<?php
$progressTitle = get_sub_field('our_progress_title');
$progressIcon = get_sub_field('our_progress_icon');
if ($progressIcon) :
    $urlProgressIcon = $progressIcon['url'];
    $sizeProgressIcon = 'thumbnail';
    $CustomProgressIcon = $progressIcon['sizes'][$sizeProgressIcon];
endif;
?>
<div class="expertise-icon-item active" data-target="#expertise_carouselid" data-slide-to="0">
    <img src="<?php echo esc_url($urlProgressIcon); ?>" alt="<?= $progressTitle; ?>">
</div>
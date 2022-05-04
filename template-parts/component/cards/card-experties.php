<?php
$progressTitle = get_sub_field('our_progress_title');
$progressValue = get_sub_field('our_progress_value');
?>
<div class="single_experties">
    <div class="progress_text">
        <div class="skill-title float-left text-capitalize"><?= $progressTitle; ?></div>
        <div class="skill-percent float-right"><?= $progressValue; ?>%</div>
    </div>
    <div class="progress">
        <div class="progress-bar wow Rx-width-<?= $progressValue; ?> animated" role="progressbar" data-wow-duration="1.5s" data-wow-delay=".5s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
        </div>
    </div>
</div>
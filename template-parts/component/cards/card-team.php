<?php
$teamPosition = get_field('team_position');
?>

<div class="col-lg-3 col-md-6">
    <div class="team-member-box">
        <div class="team-img">
            <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('team-thumbnail'); ?>" alt="<?php the_title() ?>">
            <?php endif; ?>
        </div>
        <div class="team-text pera-content text-center headline">
            <h3><?php the_title(); ?></h3>
            <p><?= $teamPosition; ?></p>

            <?php
            if (have_rows('social_icon_team', $post->ID)) :
            ?>
                <div class="team-social">
                    <?php
                    while (have_rows('social_icon_team', $post->ID)) : the_row();
                    ?>
                        <?php
                        if (get_sub_field('is_active_social_icon_team')) :
                        ?>
                            <a href="<?php the_sub_field('social_icon_team_link'); ?>" title="<?php the_sub_field('social_icon_team_name'); ?>" aria-label="<?php the_sub_field('social_icon_team_name'); ?>">
                                <i class="<?php the_sub_field('social_icon_team_icon'); ?>"></i>
                            </a>
                        <?php endif; ?>
                    <?php
                    endwhile;
                    ?>
                </div>
            <?php
            endif;
            ?>
        </div>
    </div>
</div>
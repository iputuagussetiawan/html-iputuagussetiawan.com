<ul class="social-icons">
    <?php
    if (have_rows('social_icons_list', 'company-setting')) :
        while (have_rows('social_icons_list', 'company-setting')) : the_row();

            $socialIcon = get_sub_field('social_icon');
            if ($socialIcon) :
                $urlSocialIcon = $socialIcon['url'];
            // $sizeSocialIcon = 'thumbnail';
            // $customSocialIcon = $socialIcon['sizes'][$sizeSocialIcon];
            endif;
    ?>
            <?php
            if (get_sub_field('social_is_active')) :
            ?>
                <li class="social_icons__item">
                    <a class="social_icons__link" href="<?php the_sub_field('social_link'); ?>" title="<?php the_sub_field('social_title'); ?>" aria-label="<?php the_sub_field('social_title'); ?>">
                        <img class="social_icons__icon" src=" <?php echo $urlSocialIcon ?>" alt="<?php the_sub_field('social_title'); ?>">
                        <?php the_sub_field('social_title'); ?>
                    </a>
                </li>
            <?php endif; ?>
    <?php
        endwhile;
    endif;
    ?>
</ul>
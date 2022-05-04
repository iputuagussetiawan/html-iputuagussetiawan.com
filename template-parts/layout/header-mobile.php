<?php
$pageContactID = get_field('contact_link', 'page_link')->ID;
$contactLink = get_permalink($pageContactID);

$showMobileMenuPhone = get_field('show_top_menu_phone', 'theme-setting');
$showMobileMenuEmail = get_field('show_top_menu_email', 'theme-setting');
$showMobileMenuSocialIcon = get_field('show_top_menu_social_icon', 'theme-setting');
$showMobileMenuContactButton = get_field('show_main_menu_contact_button', 'theme-setting');
$showMobileMenuSearchButton = get_field('show_main_menu_search_button', 'theme-setting');

$HeaderLogo = get_field('company_logo', 'company-setting');
$companyPhoneNumber = get_field('company_phone', 'company-setting');
$companyPhoneNumberLink = get_field('company_phone_link', 'company-setting');
$companyEmail = get_field('company_email', 'company-setting');
if ($HeaderLogo) :
    $urlHeaderLogo = $HeaderLogo['url'];
    $titleHeaderLogo = $HeaderLogo['title'];
    $altHeaderLogo = $HeaderLogo['alt'];
endif;
?>
<div class="el-mobile_menu relative-position">
    <div class="el-mobile_menu_button s2-open_mobile_menu">
        <i class="fas fa-bars"></i>
    </div>
    <div class="el-mobile_menu_wrap">
        <div class="mobile_menu_overlay s2-open_mobile_menu"></div>
        <div class="el-mobile_menu_content">
            <div class="el-mobile_menu_close s2-open_mobile_menu">
                <i class="fas fa-arrow-circle-right"></i>
            </div>
            <div class="m-brand-logo text-center">
                <a href="<?= site_url(); ?>"><img src="<?= $urlHeaderLogo; ?>" alt="<?= $altHeaderLogo ?>"></a>
            </div>
            <?php
            if ($showMobileMenuSearchButton) :
            ?>
                <div class="mobile-search">
                    <form class="form-item position-relative" "<?= esc_url(home_url('/')) ?>" method="GET">
                        <input type="search" name="s" id="s_general" placeholder="Search..." value="<?= get_search_query() ?>">
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
            <?php
            endif;
            ?>

            <nav class="el-mobile-main-navigation  clearfix ul-li">
                <?php
                wp_nav_menu(array(
                    'theme_location'    => 'header-menu',
                    'depth'             => 2,
                    'menu_class'        => 'navbar-nav text-capitalize clearfix',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ));
                ?>
            </nav>
            <div class="mobile-contact-info text-center ul-li-block">
                <ul>
                    <?php
                    if ($showMobileMenuPhone) :
                    ?>
                        <li> <i class="icon-call-out"></i> <a href="tel:<?= $companyPhoneNumberLink; ?>"><?= $companyPhoneNumber; ?></a></li>
                    <?php
                    endif;
                    ?>
                    <?php
                    if ($showMobileMenuEmail) :
                    ?>
                        <li> <i class="icon-envelope-letter"></i> <a href="mailto:<?= $companyEmail; ?>"><?= $companyEmail; ?></a></li>
                    <?php
                    endif;
                    ?>
                </ul>
            </div>


            <?php
            if ($showMobileMenuSocialIcon) :
            ?>
                <div class="mobile-follow text-center ul-li">
                    <span>Follow Eltron 3333:</span>
                    <ul>
                        <?php
                        if (have_rows('social_icons_list', 'social_icons')) :
                            while (have_rows('social_icons_list', 'social_icons')) : the_row();
                        ?>
                                <?php
                                if (get_sub_field('social_is_active')) :
                                ?>
                                    <li>
                                        <a href="<?php the_sub_field('social_link'); ?>" title="<?php the_sub_field('social_title'); ?>" aria-label="<?php the_sub_field('social_title'); ?>">
                                            <i class="<?php the_sub_field('social_icon'); ?>"></i>
                                        </a>
                                    </li>
                                <?php endif; ?>
                        <?php
                            endwhile;
                        endif;
                        ?>
                    </ul>
                </div>
            <?php
            endif;
            ?>


            <?php
            if ($showMobileMenuContactButton) :
            ?>
                <div class="mobile-consult-btn text-uppercase">
                    <a href="<?php echo $contactLink; ?>">Consultation</a>
                </div>
            <?php
            endif;
            ?>
        </div>
    </div>
</div>
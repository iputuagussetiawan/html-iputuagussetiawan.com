<?php
$showMainMenuContactButton = get_field('show_main_menu_contact_button', 'theme-setting');
$showMainMenuSearchButton = get_field('show_main_menu_search_button', 'theme-setting');
$showTopMenuSocialIcon = get_field('show_top_menu_social_icon', 'theme-setting');

$companyPhoneNumber = get_field('company_phone', 'company-setting');
$companyPhoneNumberLink = get_field('company_phone_link', 'company-setting');

$HeaderLogo = get_field('header_logo', 'company-setting');
if ($HeaderLogo) :
    $urlHeaderLogo = $HeaderLogo['url'];
    $titleHeaderLogo = $HeaderLogo['title'];
    $altHeaderLogo = $HeaderLogo['alt'];
endif;
?>
<div class="site-main-menu clearfix">
    <div class="menu-item-left  float-left">
        <div class="brand-logo float-left">
            <a href="#"><img src="assets/img/logo/f-logo.png" alt=""></a>
        </div>
        <nav class="main_navigation desktop-menu ul-li">
            <?php
            wp_nav_menu(array(
                'theme_location'    => 'header-menu',
                'depth'             => 2,
                'menu_class'        => 'navbar-nav text-uppercase clearfix',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
            ));
            ?>
        </nav>
    </div>
    <div class="site-search-btn float-right">
        <?php
        get_template_part('template-parts/component/navbar', 'socialicon');
        ?>
        <?php
        if ($showMainMenuContactButton) :
        ?>
            <div class="header-qoute-btn pera-content">
                <p><i class="icon-call-out"></i> Any Questions?</p>
                <a href="tel:<?= $companyPhoneNumberLink; ?>"><strong><?= $companyPhoneNumber; ?></strong></a>
            </div>
        <?php
        endif;
        ?>
        <?php
        if ($showMainMenuSearchButton) :
        ?>
            <div class="el-search position-relative">
                <i class="el-search-btn fas fa-search"></i>
            </div>
        <?php
        endif;
        ?>
    </div>
</div>
<div class="search-body">
    <div class="search-form">
        <form action="<?= esc_url(home_url('/')) ?>" method="GET">
            <input class="search-input" type="search" name="s" id="s_general" placeholder="Search Here" value="<?= get_search_query() ?>">
            <div class="outer-close el-search-btn">
                <button type="button" class="search-close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </form>
    </div>
</div>
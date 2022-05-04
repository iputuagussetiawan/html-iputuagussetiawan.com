<?php
$pageContactID = get_field('contact_link', 'page_link')->ID;
$contactLink = get_permalink($pageContactID);

$showMainMenuContactButton = get_field('show_main_menu_contact_button', 'theme-setting');
$showMainMenuSearchButton = get_field('show_main_menu_search_button', 'theme-setting');

$HeaderLogo = get_field('company_logo', 'company-setting');
if ($HeaderLogo) :
    $urlHeaderLogo = $HeaderLogo['url'];
    $titleHeaderLogo = $HeaderLogo['title'];
    $altHeaderLogo = $HeaderLogo['alt'];
endif;
?>
<div class="site-main-menu clearfix">
    <div class="container">
        <div class="brand-logo float-left">
            <a href="<?= site_url(); ?>"><img src="<?= $urlHeaderLogo; ?>" alt="<?= $altHeaderLogo ?>"></a>
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

        <div class="site-search-btn float-right">
            <?php
            if ($showMainMenuSearchButton) :
            ?>
                <div class="el-search position-relative">
                    <i class="el-search-btn fas fa-search"></i>
                    <div class="search-body">
                        <div class="search-form">
                            <form action="<?= esc_url(home_url('/')) ?>" method="GET">
                                <input class="search-input" type="search" name="s" id="s_general" placeholder="Search Here" value="<?= get_search_query() ?>">
                                <div class="outer-close el-search-btn">
                                    <i class="fas fa-times"></i>
                                </div>
                                <button type="submit" class="search-close">
                                    <i class="fas fa-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php
            endif;
            ?>

            <?php
            if ($showMainMenuContactButton) :
            ?>
                <div class="con-btn text-center  text-uppercase">
                    <a href="<?php echo $contactLink; ?>">consultation<i class="flaticon-next"></i></a>
                </div>
            <?php
            endif;
            ?>
        </div>
    </div>
</div>
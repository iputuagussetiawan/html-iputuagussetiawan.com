<?php
$showTopMenuMenu = get_field('show_top_menu_menu', 'theme-setting');
if ($showTopMenuMenu) :
?>
    <div class="top_info_item top_info_menu ul-li clearfix">
        <?php
        $args = array(
            'theme_location'  => 'top-menu',
            'depth'           => 1,
            'container'       => false,
            'menu_class'      => 'top-menu',
            'add_li_class'    => 'top-menu__item',
            'link_class'      => 'top-menu__link'
        );
        wp_nav_menu($args);
        ?>
    </div>
<?php
endif;
?>
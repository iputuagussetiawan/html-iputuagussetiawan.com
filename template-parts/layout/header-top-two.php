<?php
$pageContactID = get_field('contact_link', 'page_link')->ID;
$contactLink = get_permalink($pageContactID);
$showMainMenuContactButton = get_field('show_main_menu_contact_button', 'theme-setting');

$showTopMenu = get_field('show_top_bar', 'theme-setting');
$showTopMenuPhone = get_field('show_top_menu_phone', 'theme-setting');
$showTopMenuEmail = get_field('show_top_menu_email', 'theme-setting');
$showTopMenuMenu = get_field('show_top_menu_menu', 'theme-setting');
$showTopMenuSocialIcon = get_field('show_top_menu_social_icon', 'theme-setting');
$showTopMenuContactButton = get_field('show_main_menu_contact_button', 'theme-setting');

$companyPhoneNumber = get_field('company_phone', 'company-setting');
$companyPhoneNumberLink = get_field('company_phone_link', 'company-setting');
$companyEmail = get_field('company_email', 'company-setting');
?>
<?php
if ($showTopMenu) :
?>
    <div class="header_top">
        <?php
        get_template_part('template-parts/component/navbar', 'topcontactinfo');
        ?>

        <div class="header_top_info float-right">
            <?php
            get_template_part('template-parts/component/navbar', 'topmenu');
            ?>
            <?php
            if ($showMainMenuContactButton) :
            ?>
                <div class="header-top-btn text-center">
                    <a href="<?php echo esc_url($contactLink) ?>">consultation <i class="flaticon-next"></i></a>
                </div>
            <?php
            endif;
            ?>

        </div>
    </div>
<?php
endif;
?>
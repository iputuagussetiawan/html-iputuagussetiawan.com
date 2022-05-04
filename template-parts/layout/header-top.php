<?php
$showTopMenu = get_field('show_top_bar', 'theme-setting');
$showTopMenuPhone = get_field('show_top_menu_phone', 'theme-setting');
$showTopMenuEmail = get_field('show_top_menu_email', 'theme-setting');
$showTopMenuMenu = get_field('show_top_menu_menu', 'theme-setting');
$showTopMenuSocialIcon = get_field('show_top_menu_social_icon', 'theme-setting');

$companyPhoneNumber = get_field('company_phone', 'company-setting');
$companyPhoneNumberLink = get_field('company_phone_link', 'company-setting');
$companyEmail = get_field('company_email', 'company-setting');
?>
<?php
if ($showTopMenu) :
?>
    <div class="header_top">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <?php
                    get_template_part('template-parts/component/navbar', 'topcontactinfo');
                    ?>
                </div>
                <div class="col-md-5">
                    <div class="header_top_info float-right">
                        <?php
                        get_template_part('template-parts/component/navbar', 'topmenu');
                        get_template_part('template-parts/component/navbar', 'socialicon');
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
endif;
?>
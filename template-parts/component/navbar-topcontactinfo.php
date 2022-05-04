<?php
$showTopMenuPhone = get_field('show_top_menu_phone', 'theme-setting');
$showTopMenuEmail = get_field('show_top_menu_email', 'theme-setting');

$companyPhoneNumber = get_field('company_phone', 'company-setting');
$companyPhoneNumberLink = get_field('company_phone_link', 'company-setting');
$companyEmail = get_field('company_email', 'company-setting');
?>
<div class="header_top_contact ul-li float-left">
    <ul>
        <?php
        if ($showTopMenuPhone) :
        ?>
            <li> <i class="icon-call-out"></i> <a href="tel:<?= $companyPhoneNumberLink; ?>"><?= $companyPhoneNumber; ?></a></li>
        <?php
        endif;
        ?>
        <?php
        if ($showTopMenuEmail) :
        ?>
            <li> <i class="icon-envelope-letter"></i> <a href="mailto:<?= $companyEmail; ?>"><?= $companyEmail; ?></a></li>
        <?php
        endif;
        ?>
    </ul>
</div>
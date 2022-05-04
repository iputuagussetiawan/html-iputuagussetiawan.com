<?php
$companyPhoneNumber = get_field('company_phone', 'company-setting');
$companyPhoneNumberLink = get_field('company_phone_link', 'company-setting');
$companyEmail = get_field('company_email', 'company-setting');
?>
<div class="service-sidebar-widget">
    <div class="help-widget pera-content">
        <h3 class="widget-title">Need Help?</h3>
        <span>Call us or Email</span>
        <div class="contact-text pera-content headline">
            <p>
                <i class="icon-call-in"></i><strong><?= $companyPhoneNumber; ?> <br></strong>
                <?= $companyEmail ?>
            </p>
        </div>
    </div>
</div>
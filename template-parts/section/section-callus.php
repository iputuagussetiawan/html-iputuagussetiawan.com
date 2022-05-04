<?php
$callPhoneNumber = get_field('company_phone', 'company-setting');
$callPhoneNumberLink = get_field('company_phone_link', 'company-setting');
$mailEmail = get_field('company_email', 'company-setting');

?>
<section id="consaltation" class="consaltation-section position-relative">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="consaltation-content">
                    <div class="consaltation-icon text-center">
                        <i class="icon-call-out"></i>
                    </div>
                    <div class="consaltation-text">
                        <h3>Get a Free Consultation, Call us</h3>
                        <span><?= $callPhoneNumber; ?></span>
                    </div>
                    <div class="consalt-btn text-center text-uppercase">
                        <a href="tel:<?= $callPhoneNumberLink; ?>">contact us <i class="flaticon-next"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

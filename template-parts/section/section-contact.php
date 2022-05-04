<?php
$pageContactID = get_field('contact_link', 'page_link')->ID;
$contactLink = get_permalink($pageContactID);
$sectionTitleContact = get_field('section_title_contact', $pageAboutID);
$sectionContactSortDescription = get_field('section_sort_description_contact', $pageAboutID);
$phoneNumber = get_field('company_phone', 'company-setting');
$phoneNumberLink = get_field('company_phone_link', 'company-setting');
$email = get_field('company_email', 'company-setting');
$address = get_field('company_address', 'company-setting');
$map = get_field('company_map', 'company-setting');
$customerSupport = get_field('customer_support_open_', 'company-setting');
?>
<div id="google-map">
    <div class="earth3dmap-com">
        <?= $map; ?>
        <!-- <div style="color: #333; font-size: 14px; font-family: Arial, Helvetica, sans-serif; text-align: right; padding: 10px;">
            <a style="color: #333; text-decoration: underline; font-size: 14px; font-family: Arial, Helvetica, sans-serif; text-align: right;" href="http://earth3dmap.com/?from=embed" target="_blank"></a>
        </div> -->
    </div>
</div>

<section id="contact-page-area" class="contact-page-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="contact-form-text headline pera-content">
                    <h3><?= $sectionTitleContact; ?> </h3>
                    <p><?= $sectionContactSortDescription; ?></p>
                    <div class="el-contact-info">
                        <div class="contact-address">
                            <div class="contact-icon">
                                <i class="icon-pin"></i>
                            </div>
                            <div class="contact-text pera-content headline">
                                <h4>Corporate Office</h4>
                                <p><?= $address; ?></p>
                            </div>
                        </div>
                        <div class="contact-address">
                            <div class="contact-icon">
                                <i class="far fa-clock"></i>
                            </div>
                            <div class="contact-text pera-content headline">
                                <h4>Customer Support</h4>
                                <p>
                                    <?php
                                    if (have_rows('customer_support_open_', 'company-setting')) :
                                        while (have_rows('customer_support_open_', 'company-setting')) : the_row();
                                            $dayOpen = get_sub_field('day_open_customer_support');
                                            $openTime = get_sub_field('open_time_customer_support');
                                            $closeTime = get_sub_field('close_time_customer_support');
                                            echo $dayOpen . ' ' . $openTime . ' - ' . $closeTime . '<br>';
                                        endwhile;
                                    endif;
                                    ?>
                                </p>
                            </div>
                        </div>
                        <div class="contact-address">
                            <div class="contact-icon">
                                <i class="icon-call-in"></i>
                            </div>
                            <div class="contact-text pera-content headline">
                                <h4>Contact us</h4>
                                <p><STRONG><?= $phoneNumber; ?> <br></STRONG>
                                    <?= $email; ?></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="el-contact-form headline">
                    <h3>Send a Message!</h3>
                    <?php
                    echo do_shortcode('[contact-form-7 id="12" title="Contact"]');
                    $thankyouUrl = get_permalink(get_field('thankyou_link', 'page_link')->ID);
                    wp_localize_script('contact_js', 'thankyouUrl', $thankyouUrl);
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
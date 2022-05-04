<?php

/**
 * Footer template
 *
 * @package iputuagussetiawan
 */
$optionPageID = 'company-setting';
$companyName = get_field('company_name', $optionPageID);
$footerPhoneNumber = get_field('company_phone', $optionPageID);
$footerPhoneNumberLink = get_field('company_phone_link', $optionPageID);
$footerEmail = get_field('company_email', $optionPageID);
$footerAddress = get_field('company_address', $optionPageID);
$footerCity = get_field('company_city', $optionPageID);
$footerProvince = get_field('company_province', $optionPageID);
$footerCountry = get_field('company_country', $optionPageID);
$footerPostcode = get_field('company_postcode', $optionPageID);
$footerOpenTime = get_field('company_open_time', $optionPageID);
$companySortDescription = get_field('company_sort_description', $optionPageID);

$footerLogo = get_field('company_logo', $optionPageID);
if ($footerLogo) :
    $urlfooterLogo = $footerLogo['url'];
    $titlefooterLogo = $footerLogo['title'];
    $altfooterLogo = $footerLogo['alt'];
endif;
?>
<footer class="footer section-padding--top" data-scroll-section>
    <div class="backtop">
        <span></span>
        <span></span>
        <p>back to top</p>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="footer__content">
                    <a href="#" class="footer__logo">
                        <!-- <i class="ri-quill-pen-line"></i>AG-d'sign -->
                        <img src="<?php echo  $urlfooterLogo ?>" alt="profile logo">
                    </a>

                    <h3 class="footer__title">
                        Subscribe to our newsletter <br> to stay update
                    </h3>

                    <div class="footer__subscribe">
                        <input type="email" placeholder="Enter your email" class="footer__input">

                        <button class="btn btn-success footer__button">
                            Subscribe
                            <i class="ri-arrow-right-up-line button__icon"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer__content">
                    <h3 class="footer__title">Our Address</h3>
                    <p><?php echo $footerAddress; ?></p>
                    <ul class="footer__data">
                        <li class="footer__information"><?php echo $footerCity; ?> - <?php echo $footerProvince; ?></li>
                        <li class="footer__information"><?php echo $footerPostcode ?></li>

                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer__content">
                    <h3 class="footer__title">Contact Us</h3>
                    <ul class="footer__data">
                        <li class="footer__information">
                            <a href="tel:<?php echo $footerPhoneNumberLink ?>"><?php echo $footerPhoneNumber ?></a>
                        </li>
                        <li class="footer__information">
                            <a href="mailto:<?php echo $footerEmail ?>"><?php echo $footerEmail ?></a>
                        </li>
                        <?php
                        get_template_part('template-parts/component/social', 'icons');
                        ?>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <div class="footer__copyright">
        <div class="container-fluid text-center">
            &#169; <?php echo date('Y'); ?> <?php echo $companyName; ?>
        </div>
    </div>
</footer>
<a href="https://wa.me/<?php echo $footerPhoneNumberLink ?>" id="whatapps" class="whatapps" target="_blank">
    <i class="ri-whatsapp-line whatapps__icon"></i>
</a>

<?php
$PreloaderLogo = get_field('loader_logo_light', 'company-setting');
if ($PreloaderLogo) :
    $urlPreloaderLogo = $PreloaderLogo['url'];
endif;
?>
<?php
if ($urlPreloaderLogo) :
?>
    <div class="loader">
        <div class="loader__circle-container">
            <div class="line">
                <div class="inner"></div>
            </div>
        </div>
        <div class="loader__icon-container">
            <img class="loader__icon" src="<?php echo  $urlPreloaderLogo  ?>" alt="Loader Icon">
        </div>
    </div>
<?php
endif;
?>

</div>
<?php wp_footer(); ?>
</body>

</html>
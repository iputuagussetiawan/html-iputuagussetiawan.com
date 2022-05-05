<?php
$pageHomeID = get_field('home_link', 'page_link')->ID;
$homeLink = get_permalink($pageHomeID);
$bannerSubtitle = get_field('banner_subtitle', $pageHomeID);
$bannerTitle = get_field('banner_title', $pageHomeID);
$bannerTextLink = get_field('banner_text_link', $pageHomeID);
$bannerLink = get_field('banner_link', $pageHomeID);
$bannerThumbnail = get_field('banner_thumbnail', $pageHomeID);
if ($bannerThumbnail) :
    $urlBannerThumbnail = $bannerThumbnail['url'];
    $sizeBannerThumbnail = 'thumbnail';
    $customBannerThumbnail = $bannerThumbnail['sizes'][$sizeSectionAboutIcon];
endif;
?>
<section id="home" class="banner" data-scroll-section>
    <div class="banner__info-container" data-scroll data-scroll-speed="1.5">
        <p class="banner__subtitle"><?php echo $bannerSubtitle ?> </p>
        <h1 class="banner__title"><?php echo $bannerTitle ?></h1>
        <div id="typed-strings">
            <?php
            if (have_rows('banner_passion_list', $pageHomeID)) :
                while (have_rows('banner_passion_list', $pageHomeID)) : the_row();
                    $bannerPropession = get_sub_field('banner_propession');
            ?>
                    <p><?php echo $bannerPropession; ?></p>
            <?php
                endwhile;
            endif;
            ?>
        </div>
        <span id="typed" class="banner__profession"></span>
        <div class="btn-wrapper">
            <a href="<?php echo $bannerLink ?>" class="btn-primary btn-ripple"><?php echo $bannerTextLink ?></a>
        </div>
    </div>
    <div class="banner__image-container">
        <img class="img-fluid" src="<?php echo $urlBannerThumbnail; ?>" alt="<?php $bannerTitle ?>">
    </div>
</section>
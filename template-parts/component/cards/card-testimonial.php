<?php
$testimonialRating = get_field('rating');
$testimonialClientFromCompany = get_field('client_from_company');
$testimonialTestimoni = get_field('testimoni');
$testimonialSubject = get_field('subject');
$testimonialClientEmail = get_field('client_email');
$testimonialTestimonialName = get_field('testimonial_name');
$testimonialIsShowHome = get_field('is_show_home');
$testimonailImage = get_field('client_photo');

if ($testimonailImage) :
    $urlImageTesti = $testimonailImage['url'];
    $sizeImageTesti = 'thumbnail';
    $CustomImageTesti = $testimonailImage['sizes'][$sizeImageTesti];
endif;
?>
<div class="testimonial-slide-text headline pera-content position-relative">
    <div class="q-icon">
        <i class="fas fa-quote-right"></i>
    </div>
    <h3><?= $testimonialSubject; ?></h3>
    <p><?= $testimonialTestimoni; ?></p>
    <div class="testimonial-img-rate">
        <div class="testimonial-pic float-left">
            <img src="<?= $urlImageTesti; ?>" alt="<?= $testimonialTestimonialName; ?>">
        </div>
        <div class="testimonial-rate ul-li">
            <h4><?php the_title(); ?></h4>
            <span><?= $testimonialClientFromCompany; ?></span>
            <ul>
                <?php
                if ($testimonialRating == 5) :
                ?>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                <?php
                elseif ($testimonialRating == 4) :
                ?>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                <?php
                elseif ($testimonialRating == 3) :
                ?>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                <?php
                elseif ($testimonialRating == 2) :
                ?>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                <?php
                elseif ($testimonialRating == 1) :
                ?>
                    <li><i class="fas fa-star"></i></li>
                <?php
                else :
                ?>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                <?php
                endif;
                ?>

            </ul>
        </div>
    </div>
</div>
<?php get_header(); ?>
<main>
    <?php
    get_template_part('template-parts/section', 'page-header');
    $pageDonationID = get_field('page_link_donation', 'page_link')->ID;
    $donationLink = get_permalink($pageDonationID);
    ?>
    <section class="event-details section-padding--top">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <h3><?php the_title() ?></h3>
                    <div class="content">
                        <?php the_content(); ?>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title() ?>" class="img-fluid">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="event-infos section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4 mb-30">
                    <div class="event-infos__single background-secondary">
                        <h3>Venue</h3>
                        <p>Below is the detailed info of the event we will be holding.</p>
                        <?php
                        if (get_field('active_donation')) :
                        ?>
                            <a href="<?php echo $donationLink; ?>" class="thm-btn dynamic-radius">Donate Now</a>
                        <?php endif; ?>
                        <ul class="list-unstyled event-infos__list event-infos__list-has-icons">
                            <li>
                                <i class="far fa-calendar-alt"></i>
                                <?php
                                $eventDate = new DateTime(get_field('event_date'));
                                ?>

                                <?php echo $eventDate->format('d M Y'); ?>
                            </li>
                            <li>
                                <i class="fas fa-clock"></i>
                                <?php the_field('event_start_at') ?> - <?php the_field('event_end_at') ?>
                            </li>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <?php the_field('event_address'); ?>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 mb-30">
                    <div class="google-map__event">
                        <?php the_field('event_map_location'); ?>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 mb-30">
                    <div class="event-infos__single background-special">
                        <h3>Registration</h3>
                        <p>Click Button Bellow To Registration This Event</p>
                        <a href="<?php the_field('event_link_registration'); ?>" class="thm-btn dynamic-radius">Register</a>
                        <ul class="list-unstyled event-infos__list event-infos__list-has-icons">
                            <li>
                                <i class="azino-icon-telephone"></i>
                                <a href="tel:<?php the_field('company_phone', 'our_company'); ?>"><?php the_field('company_phone', 'our_company'); ?></a>
                            </li>
                            <li>
                                <i class="azino-icon-email"></i>
                                <a href="mailto:<?php the_field('company_email', 'our_company'); ?>"><?php the_field('company_email', 'our_company'); ?></a>
                            </li>
                            <li>
                                <i class="azino-icon-pin"></i>
                                <?php the_field('company_address', 'our_company'); ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>
</main>
<?php get_footer(); ?>
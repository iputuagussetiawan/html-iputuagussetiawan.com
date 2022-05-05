<?php
/*
    Template Name: Home
*/
?>
<?php get_header(); ?>
<main>
    <?php
    get_template_part('template-parts/section/section', 'banner');
    get_template_part('template-parts/section/section', 'about');
    get_template_part('template-parts/section/section', 'ourwork');
    get_template_part('template-parts/section/section', 'news');
    get_template_part('template-parts/section/section', 'faqs');
    ?>
    <!-- <section id="clients" class="clients" data-scroll-section>
        <div class="container-fluid section-padding">

            <p class="section-subtitle">some clients who have trusted me</p>
            <h2 class="section-title">Our Clients</h2>
            <div class="clients__list">
                <div class="clients__logo">
                    <img src="./src/images/clients/image-0.png" alt="Testimonials Brand Image">
                </div>
                <div class="clients__logo">
                    <img src="./src/images/clients/image-1.png" alt="Testimonials Brand Image">
                </div>
                <div class="clients__logo">
                    <img src="./src/images/clients/image-3.png" alt="Testimonials Brand Image">
                </div>

                <div class="clients__logo">
                    <img src="./src/images/clients/image-4.png" alt="Testimonials Brand Image">
                </div>
                <div class="clients__logo">
                    <img src="./src/images/clients/image-5.png" alt="Testimonials Brand Image">
                </div>
                <div class="clients__logo">
                    <img src="./src/images/clients/image-6.png" alt="Testimonials Brand Image">
                </div>
            </div>
        </div>

    </section> -->

    <section id="contact" class="contact section-padding--top" data-scroll-section>
        <div class="container-fluid">
            <div class="contact__grid">
                <div class="contact__info-container">
                    <p class="section-subtitle">Get In Touch</p>
                    <h3 class="section-title">Reach out to us today <br />via any of the given <br />information</h3>

                    <ul class="contact-list">
                        <li class="contact-list__item">
                            <span class="contact-list__label">Call us for instant support</span>
                            <i class="ri-phone-line contact-list__icon"></i>
                            <span class="contact-list__value">081237772015</span>
                        </li>
                        <li class="contact-list__item">
                            <span class="contact-list__label">Write us by mail</span>
                            <i class="ri-mail-line contact-list__icon"></i>
                            <span class="contact-list__value">agussetiawaniputu@gmail.com</span>
                        </li>
                    </ul>
                </div>
                <div class="contact__form-container">
                    <form>
                        <div class="contact__inputs">
                            <div class="contact__content">
                                <input type="email" placeholder=" " class="contact__input">
                                <label for="" class="contact__label">Email</label>
                            </div>

                            <div class="contact__content">
                                <input type="text" placeholder=" " class="contact__input">
                                <label for="" class="contact__label">Subject</label>
                            </div>
                            <div class="contact__content">
                                <select id="budget" class="contact__input">
                                    <option>Select Your Budget</option>
                                    <option value="2500000">2.500.000</option>
                                    <option value="3000000">3.000.000</option>
                                    <option value="3000000">3.500.000</option>
                                    <option value="5000000">5.000.000</option>
                                    <option value="7500000">7.500.000</option>
                                    <option value="15000000">15.000.000</option>
                                </select>
                                <!-- <label for="" class="contact__label">Select Your Budget</label> -->
                            </div>

                            <div class="contact__content contact__area">
                                <textarea name="message" placeholder=" " class="contact__input"></textarea>
                                <label for="" class="contact__label">Message</label>
                            </div>

                        </div>
                        <button class="btn btn-success contact__button">
                            Send Message
                            <i class="ri-arrow-right-up-line button__icon"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
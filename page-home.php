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
    ?>



    <!-- <section id="portfolio" class="portfolio" data-scroll-section>
        <div class="container-fluid section-padding--top">
            <p class="section-subtitle">What We Do</p>
            <h2 class="section-title">Our Portfolio</h2>
            <div class="portfolio-list">
                <a href="#" target="_blank" rel="noopener" class="card-porfolio ">
                    <div class="card-porfolio__content">
                        <div class="card-porfolio__itemBg" style="background-color:#8160def0"></div>
                        <article class="card-porfolio__text">
                            <h3 class="card-porfolio__name">#1</h3>
                            <p class="card-porfolio__desc">Settings</p>
                        </article>
                    </div>
                    <div class="card-porfolio__image">
                        <img src="./src/images/dailyui-1.jpg" alt="Daily UI 1 - Settings">
                    </div>
                </a>
                <a href="#" target="_blank" rel="noopener" class="card-porfolio ">
                    <div class="card-porfolio__content">
                        <div class="card-porfolio__itemBg" style="background-color:#cb1457f0"></div>
                        <article class="card-porfolio__text">
                            <h3 class="card-porfolio__name">#2</h3>
                            <p class="card-porfolio__desc">Settings</p>
                        </article>
                    </div>
                    <div class="card-porfolio__image">
                        <img src="./src/images/dailyui-2.jpg" alt="Daily UI 1 - Settings">
                    </div>
                </a>
                <a href="#" target="_blank" rel="noopener" class="card-porfolio ">
                    <div class="card-porfolio__content">
                        <div class="card-porfolio__itemBg" style="background-color:#6090def0"></div>
                        <article class="card-porfolio__text">
                            <h3 class="card-porfolio__name">#3</h3>
                            <p class="card-porfolio__desc">Settings</p>
                        </article>
                    </div>
                    <div class="card-porfolio__image">
                        <img src="./src/images/dailyui-3.jpg" alt="Daily UI 1 - Settings">
                    </div>
                </a>
                <a href="#" target="_blank" rel="noopener" class="card-porfolio ">
                    <div class="card-porfolio__content">
                        <div class="card-porfolio__itemBg" style="background-color:#8160def0"></div>
                        <article class="card-porfolio__text">
                            <h3 class="card-porfolio__name">#1</h3>
                            <p class="card-porfolio__desc">Settings</p>
                        </article>
                    </div>
                    <div class="card-porfolio__image">
                        <img src="./src/images/dailyui-1.jpg" alt="Daily UI 1 - Settings">
                    </div>
                </a>
                <a href="#" target="_blank" rel="noopener" class="card-porfolio ">
                    <div class="card-porfolio__content">
                        <div class="card-porfolio__itemBg" style="background-color:#cb1457f0"></div>
                        <article class="card-porfolio__text">
                            <h3 class="card-porfolio__name">#2</h3>
                            <p class="card-porfolio__desc">Settings</p>
                        </article>
                    </div>
                    <div class="card-porfolio__image">
                        <img src="./src/images/dailyui-2.jpg" alt="Daily UI 1 - Settings">
                    </div>
                </a>
                <a href="#" target="_blank" rel="noopener" class="card-porfolio ">
                    <div class="card-porfolio__content">
                        <div class="card-porfolio__itemBg" style="background-color:#6090def0"></div>
                        <article class="card-porfolio__text">
                            <h3 class="card-porfolio__name">#3</h3>
                            <p class="card-porfolio__desc">Settings</p>
                        </article>
                    </div>
                    <div class="card-porfolio__image">
                        <img src="./src/images/dailyui-3.jpg" alt="Daily UI 1 - Settings">
                    </div>
                </a>
                <a href="#" target="_blank" rel="noopener" class="card-porfolio ">
                    <div class="card-porfolio__content">
                        <div class="card-porfolio__itemBg" style="background-color:#8160def0"></div>
                        <article class="card-porfolio__text">
                            <h3 class="card-porfolio__name">#1</h3>
                            <p class="card-porfolio__desc">Settings</p>
                        </article>
                    </div>
                    <div class="card-porfolio__image">
                        <img src="./src/images/dailyui-1.jpg" alt="Daily UI 1 - Settings">
                    </div>
                </a>
                <a href="#" target="_blank" rel="noopener" class="card-porfolio ">
                    <div class="card-porfolio__content">
                        <div class="card-porfolio__itemBg" style="background-color:#cb1457f0"></div>
                        <article class="card-porfolio__text">
                            <h3 class="card-porfolio__name">#2</h3>
                            <p class="card-porfolio__desc">Settings</p>
                        </article>
                    </div>
                    <div class="card-porfolio__image">
                        <img src="./src/images/dailyui-2.jpg" alt="Daily UI 1 - Settings">
                    </div>
                </a>
                <a href="#" target="_blank" rel="noopener" class="card-porfolio ">
                    <div class="card-porfolio__content">
                        <div class="card-porfolio__itemBg" style="background-color:#6090def0"></div>
                        <article class="card-porfolio__text">
                            <h3 class="card-porfolio__name">#3</h3>
                            <p class="card-porfolio__desc">Settings</p>
                        </article>
                    </div>
                    <div class="card-porfolio__image">
                        <img src="./src/images/dailyui-3.jpg" alt="Daily UI 1 - Settings">
                    </div>
                </a>
            </div>



            <div class="btn-wrapper text-center mt-5">
                <a href="#" class="btn-primary btn-ripple">Read More</a>
            </div>




        </div>
    </section> -->

    <!-- <section id="news" class="news" data-scroll-section>
        <div class="container-fluid section-padding">
            <p class="section-subtitle">We Always Update All Post</p>
            <h2 class="section-title">New Post</h2>
            <div class="card-post-list">

                <div class="card-post">
                    <div class="card-post__special-list">
                        <span class="card-post__special-item">Mei, 01 2022</span>

                    </div>
               

                    <div class="card-post__image-container">
                        <img src="./src/images/dailyui-1.jpg" alt="news" class="card-post__image img-fluid">
                    </div>
                    <div class="card-post__info-container">
                      
                        <h3 class="card-post__title">Promo Balaji ATV Ride Bali</h3>

                        <p class="card-post__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, laudantium nobis, deleniti iste, vero hic corrupti dicta harum animi commodi molestiae voluptates nihil quis enim perferendis tenetur dolorum quidem odio.</p>
                    </div>
                    <div class="card-post__by">Post By: Agus</div>
                    <a href="#" class="card-post__button">More</a>
                </div>

                <div class="card-post">
                    <div class="card-post__special-list">
                        <span class="card-post__special-item">Mei, 01 2022</span>

                    </div>
                    

                    <div class="card-post__image-container">
                        <img src="./src/images/dailyui-1.jpg" alt="news" class="card-post__image img-fluid">
                    </div>
                    <div class="card-post__info-container">
                      
                        <h3 class="card-post__title">Promo Balaji ATV Ride Bali</h3>

                        <p class="card-post__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, laudantium nobis, deleniti iste, vero hic corrupti dicta harum animi commodi molestiae voluptates nihil quis enim perferendis tenetur dolorum quidem odio.</p>
                    </div>
                    <div class="card-post__by">Post By: Agus</div>
                    <a href="#" class="card-post__button">More</a>
                </div>



                <div class="card-post">
                    <div class="card-post__header">
                        <div class="card-post__special-list">
                            <span class="card-post__special-item">Mei, 01 2022</span>

                        </div>
                        <div class="card-post__image-container">
                            <img src="./src/images/dailyui-1.jpg" alt="news" class="card-post__image img-fluid">
                        </div>
                        <div class="card-post__category-list">
                            <span class="card-post__category-item">Mei, 01 2022</span>
                            <span class="card-post__category-item">Technology</span>
                            <span class="card-post__category-item">Technology</span>
                            <span class="card-post__category-item">Technology</span>
                            <span class="card-post__category-item">Technology</span>
                        </div>
                    </div>

                    <div class="card-post__info-container">

                      
                        <h3 class="card-post__title">Promo Balaji ATV Ride Bali</h3>

                        <p class="card-post__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, laudantium nobis, deleniti iste, vero hic corrupti dicta harum animi commodi molestiae voluptates nihil quis enim perferendis tenetur dolorum quidem odio.</p>
                    </div>
                    <div class="card-post__by">Post By: Agus</div>
                    <a href="#" class="card-post__button">More</a>
                </div>
                <div class="card-post">
                    <div class="card-post__header">
                        <div class="card-post__special-list">
                            <span class="card-post__special-item">Mei, 01 2022</span>

                        </div>
                        <div class="card-post__image-container">
                            <img src="./src/images/dailyui-1.jpg" alt="news" class="card-post__image img-fluid">
                        </div>
                        <div class="card-post__category-list">
                            <span class="card-post__category-item">Mei, 01 2022</span>
                            <span class="card-post__category-item">Technology</span>
                            <span class="card-post__category-item">Technology</span>
                            <span class="card-post__category-item">Technology</span>
                            <span class="card-post__category-item">Technology</span>
                        </div>
                    </div>

                    <div class="card-post__info-container">

                        
                        <h3 class="card-post__title">Promo Balaji ATV Ride Bali</h3>

                        <p class="card-post__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, laudantium nobis, deleniti iste, vero hic corrupti dicta harum animi commodi molestiae voluptates nihil quis enim perferendis tenetur dolorum quidem odio.</p>
                    </div>
                    <div class="card-post__by">Post By: Agus</div>
                    <a href="#" class="card-post__button">More</a>
                </div>



            </div>
        </div>
    </section> -->

    <section id="faqs" class="questions" data-scroll-section>
        <div class="container-fluid section-padding">
            <p class="section-subtitle">Some common questions <br> were often asked</p>
            <h2 class="section-title">FAQs</h2>
            <div class="questions__grid">
                <div class="questions__group">
                    <div class="questions__item">
                        <header class="questions__header">
                            <i class="ri-add-line questions__icon"></i>
                            <h3 class="questions__item-title">
                                My flowers are falling off or dying?
                            </h3>
                        </header>

                        <div class="questions__content">
                            <p class="questions__description">
                                Plants are easy way to add color energy and transform your
                                space but which planet is for you. Choosing the right plant.
                            </p>
                        </div>
                    </div>

                    <div class="questions__item">
                        <header class="questions__header">
                            <i class="ri-add-line questions__icon"></i>
                            <h3 class="questions__item-title">
                                What causes leaves to become pale?
                            </h3>
                        </header>

                        <div class="questions__content">
                            <p class="questions__description">
                                Plants are easy way to add color energy and transform your
                                space but which planet is for you. Choosing the right plant.
                            </p>
                        </div>
                    </div>

                    <div class="questions__item">
                        <header class="questions__header">
                            <i class="ri-add-line questions__icon"></i>
                            <h3 class="questions__item-title">
                                What causes brown crispy leaves?
                            </h3>
                        </header>

                        <div class="questions__content">
                            <p class="questions__description">
                                Plants are easy way to add color energy and transform your
                                space but which planet is for you. Choosing the right plant.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="questions__group">
                    <div class="questions__item">
                        <header class="questions__header">
                            <i class="ri-add-line questions__icon"></i>
                            <h3 class="questions__item-title">
                                How do i choose a plant?
                            </h3>
                        </header>

                        <div class="questions__content">
                            <p class="questions__description">
                                Plants are easy way to add color energy and transform your
                                space but which planet is for you. Choosing the right plant.
                            </p>
                        </div>
                    </div>

                    <div class="questions__item">
                        <header class="questions__header">
                            <i class="ri-add-line questions__icon"></i>
                            <h3 class="questions__item-title">
                                How do I change the pots?
                            </h3>
                        </header>

                        <div class="questions__content">
                            <p class="questions__description">
                                Plants are easy way to add color energy and transform your
                                space but which planet is for you. Choosing the right plant.
                            </p>
                        </div>
                    </div>

                    <div class="questions__item">
                        <header class="questions__header">
                            <i class="ri-add-line questions__icon"></i>
                            <h3 class="questions__item-title">
                                Why are gnats flying around my plant?
                            </h3>
                        </header>

                        <div class="questions__content">
                            <p class="questions__description">
                                Plants are easy way to add color energy and transform your
                                space but which planet is for you. Choosing the right plant.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

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
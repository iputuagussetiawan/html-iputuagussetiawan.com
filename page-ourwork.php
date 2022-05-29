<?php
/*
    Template Name: Our Work
*/
?>

<?php get_header('two'); ?>
<main>
    <section class="page-header" data-scroll-section>
        <img src="<?php echo get_template_directory_uri() ?>/src/images/about-us-banner.jpg" alt="banner work" class="parallax" />
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h1 class="page-header__title">
                        Portfolio
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <section class="portfolio" data-scroll-section>
        <div class="container">
            <div class="portfolio__search-box">
                <div class="portfolio__search-boxtop">
                    <div class="portfolio__categories-container">
                        <ul class="portfolio__categories">
                            <li class="portfolio__categories-item">
                                <a href="" class="portfolio__categories-link active">All</a>
                            </li>
                            <li class="portfolio__categories-item">
                                <a href="" class="portfolio__categories-link">App Design</a>
                            </li>
                            <li class="portfolio__categories-item">
                                <a href="" class="portfolio__categories-link">HTML CSS JS</a>
                            </li>
                            <li class="portfolio__categories-item">
                                <a href="" class="portfolio__categories-link">Wordpress Template</a>
                            </li>
                            <li class="portfolio__categories-item">
                                <a href="" class="portfolio__categories-link">Codeigniter</a>
                            </li>
                            <li class="portfolio__categories-item">
                                <a href="" class="portfolio__categories-link">Laravel</a>
                            </li>
                            <li class="portfolio__categories-item">
                                <a href="" class="portfolio__categories-link">React</a>
                            </li>
                            <li class="portfolio__categories-item">
                                <a href="" class="portfolio__categories-link">Vue</a>
                            </li>
                            <li class="portfolio__categories-item">
                                <a href="" class="portfolio__categories-link">Node</a>
                            </li>
                        </ul>
                    </div>
                    <div class="portfolio__filter">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filter" viewBox="0 0 16 16">
                                <path d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
                            </svg> Filter
                        </button>
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="mb-3">
                                            <label for="portfolio-search" class="form-label">Search Here</label>
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                    </svg>
                                                </span>
                                                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="portfolio-categories" class="form-label">Categories</label>
                                            <select id="portfolio-categories" class="form-select">
                                                <option>Select Categories</option>
                                                <option>HTML CSS JS</option>
                                                <option>UI UX</option>
                                                <option>Laravel</option>
                                                <option>React JS</option>
                                                <option>Vue Js</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <p class="section-subtitle">What We Do</p>
            <h2 class="section-title">Our Portfolio</h2>
            <div class="portfolio-list">

                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $portpolio = new WP_Query(array(
                    'post_type' => 'ourwork',
                    'post_status'   => 'publish',
                    'posts_per_page' => 2,
                    'order'         => 'ASC',
                    'paged'         => $paged
                ));
                if ($portpolio->have_posts()) :
                    $no = 1;
                    while ($portpolio->have_posts()) {
                        $portpolio->the_post();
                        $args = array('cardNumber' => $no);
                        get_template_part('template-parts/component/cards/card', 'work',  $args);
                        $no++;
                    }
                else :
                ?>
                    <div class="col-12"> No Data Found</div>
                <?php
                endif
                ?>
            </div>
            <!-- <nav aria-label="Page navigation ">
                <ul class="pagination justify-content-center mt-5">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav> -->

            <?php
            $pagination = paginate_links(array(
                'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                'format' => '?paged=%#%',
                'current' => max(1, get_query_var('paged')),
                'total' => $portpolio->max_num_pages,
                'prev_text' => 'Prev',
                'next_text' => 'Next',
                'type' => 'array',
                'show_all' => true
            ));
            ?>
            <?php if (!empty($pagination)) : ?>
                <nav aria-label="Page navigation ">
                    <ul class="pagination justify-content-center mt-5">
                        <?php foreach ($pagination as $key => $page_link) : ?>
                            <li class="page-item
                            <?php
                            $link = htmlspecialchars($page_link);
                            $link = str_replace(' current', '', $link);
                            if (strpos($page_link, 'current') !== false) {
                                echo ' active';
                            }
                            ?>
                            ">
                                <?php
                                if ($link) {
                                    $link = str_replace('page-numbers', 'page-link', $link);
                                }
                                echo htmlspecialchars_decode($link);
                                ?>
                            </li>
                        <?php endforeach ?>

                    </ul>
                </nav>
            <?php endif ?>
        </div>
    </section>
</main>
<?php get_footer('two'); ?>
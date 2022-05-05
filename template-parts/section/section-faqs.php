<?php
$pageFaqsID = get_field('faq_link', 'page_link')->ID;
$faqsLink = get_permalink($pageFaqsID);
$sectionSubTitleFaqs = get_field('section_subtitle', $pageFaqsID);
$sectionTitleFaqs = get_field('section_title', $pageFaqsID);
?>
<section id="faqs" class="questions" data-scroll-section>
    <div class="container-fluid section-padding">
        <p class="section-subtitle"><?php echo $sectionSubTitleFaqs ?></p>
        <h2 class="section-title"><?php echo $sectionTitleFaqs; ?></h2>
        <div class="questions__grid">
            <div class="questions__group">
                <!-- <div class="questions__item">
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
                </div> -->

                <?php
                $args_faqs = array(
                    'post_type' => 'faqs',
                    'orderby' => 'meta_value_num',
                    'order' => 'ASC',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'faqs_categories',
                            'field' => 'term_id',
                            'terms' => 39
                        )
                    )
                );
                $faqs_data = new WP_Query($args_faqs);
                if ($faqs_data->have_posts()) :
                    while ($faqs_data->have_posts()) {
                        $faqs_data->the_post();
                        get_template_part('template-parts/component/cards/card', 'faqs');
                    }
                else :
                ?>
                    <div class="col-12"> No Data Found</div>
                <?php
                endif
                ?>
            </div>
        </div>
    </div>
</section>
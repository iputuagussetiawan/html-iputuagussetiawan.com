<?php
$pageServiceID = get_field('service_link', 'page_link')->ID;
$serviceLink = get_permalink($pageServiceID);
?>
<section id="service-counter" class="service-counter-section">
    <div class="container">
        <div class="service-counter-content about-counter">
            <div class="row">
                <?php
                if (have_rows('service_count_list', $pageServiceID)) :
                    while (have_rows('service_count_list', $pageServiceID)) : the_row();
                        get_template_part('template-parts/component/cards/card', 'service-counter');
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
</section>
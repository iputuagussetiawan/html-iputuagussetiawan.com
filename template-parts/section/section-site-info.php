<?php
$pageHomeID = get_field('home_link', 'page_link')->ID;
$homeLink = get_permalink($pageHomeID);
?>
<section id="site-info" class="site-info-section">
    <div class="container">
        <div class="site-info-content">
            <?php
            if (have_rows('site_info_list', $pageHomeID)) :
                while (have_rows('site_info_list', $pageHomeID)) : the_row();
                    get_template_part('template-parts/component/cards/card', 'site-info');
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>
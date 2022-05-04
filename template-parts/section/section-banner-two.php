<section id="slider-eltron" class="slider-section slider-style-one slider-style-two">
    <div id="slider-main" class="slider-content owl-carousel">
        <?php
        if (have_rows('banner_lists')) :
            while (have_rows('banner_lists')) : the_row();
                $bannerType = get_sub_field('banner_type');
                if ($bannerType['value'] == 'left') :
                    get_template_part('template-parts/component/slider/slider', 'left-two');
                elseif ($bannerType['value'] == 'center') :
                    get_template_part('template-parts/component/slider/slider', 'center-two');
                else :
                    get_template_part('template-parts/component/slider/slider', 'left-two');
                endif;
                $i++;
            endwhile;
        endif;
        ?>
    </div>
</section>
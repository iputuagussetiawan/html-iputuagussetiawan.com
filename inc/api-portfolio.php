<?php

add_action('rest_api_init', 'registerPortfolio');

function registerPortfolio()
{
    register_rest_route('companyprofile/v1', 'portfolio', array(
        'methods' => WP_REST_SERVER::READABLE,
        'callback' => 'getPortfolio'
    ));
}

function getPortfolio($data)
{
    //return 'tests';
    $mainQuery = new WP_Query(array(
        'post_type' => array('ourwork'),
        's' => sanitize_text_field($data['term'])
    ));

    $results = array(
        'portfolio' => array(),
    );

    while ($mainQuery->have_posts()) {
        $mainQuery->the_post();
        if (get_post_type() == 'ourwork') {
            $workThumb = get_field('work_thumbnail');
            $thumb = $workThumb['sizes']['thumbnail'];
            array_push($results['portfolio'], array(
                'title' => get_the_title(),
                'content' => get_the_content(),
                'excerpt' =>   get_the_excerpt(),
                'permalink' => get_the_permalink(),
                'image' => get_the_post_thumbnail_url(0, 'thumbnail'),
                'thumbnail' => $thumb
            ));
        }
    }

    return $results;
}

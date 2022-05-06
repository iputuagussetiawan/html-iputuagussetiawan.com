<?php

add_action('rest_api_init', 'registerSearch');

function registerSearch()
{
    register_rest_route('companyprofile/v1', 'search', array(
        'methods' => WP_REST_SERVER::READABLE,
        'callback' => 'searchResults'
    ));
}

function searchResults($data)
{
    //return 'tests';
    $mainQuery = new WP_Query(array(
        'post_type' => array('post', 'page', 'faqs', 'ourwork'),
        's' => sanitize_text_field($data['term'])
    ));

    $results = array(
        'generalInfo' => array(),
        'ourwork' => array(),
        'faqs' => array()
    );

    while ($mainQuery->have_posts()) {
        $mainQuery->the_post();

        if (get_post_type() == 'post' or get_post_type() == 'page') {
            array_push($results['generalInfo'], array(
                'title' => get_the_title(),
                'permalink' => get_the_permalink()
            ));
        }

        if (get_post_type() == 'ourwork') {
            $workThumb = get_field('work_thumbnail');
            if ($workThumb) {
                $thumb = $workThumb['sizes']['thumbnail'];
            } else {
                $thumb = get_template_directory_uri('/src/images/dailyui-1.jpg');
            }

            array_push($results['ourwork'], array(
                'title' => get_the_title(),
                'excerpt' => get_the_excerpt(),
                'permalink' => get_the_permalink(),
                'image' => $thumb,
                'thumbnail' => $thumb
            ));
        }

        if (get_post_type() == 'faqs') {
            array_push($results['faqs'], array(
                'title' => get_the_title(),
                'permalink' => get_the_permalink(),
                'excerpt' => get_the_excerpt()
            ));
        }
    }

    return $results;
}

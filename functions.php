<?php
require get_template_directory() . '/inc/widgets.php';
require get_template_directory() . '/inc/function-acf.php';
require get_template_directory() . '/inc/frontend.php';
require get_template_directory() . '/inc/backend.php';
require get_template_directory() . '/inc/images.php';


//register API
require get_template_directory() . '/inc/search-route.php';
require get_template_directory() . '/inc/api-portfolio.php';

//Theme Assets
function tmdr_script_enqueue()
{
    $themeVersion = wp_get_theme()->get('Version');
    //css
    wp_enqueue_style('style', get_template_directory_uri() . '/build/app.css', array(), $themeVersion, 'all');

    //JS
    // wp_enqueue_script('jquery');
    wp_enqueue_script('app_js', get_template_directory_uri() . '/build/app.js', array(), '', true);


    if (is_page_template('page-home.php')) {
        wp_enqueue_style('home_style', get_template_directory_uri() . '/build/home.css', array(), $themeVersion, 'all');
        wp_enqueue_script('home_js', get_template_directory_uri() . '/build/home.js', array(), $themeVersion, true);
    }

    if (is_page_template('page-ourwork.php')) {
        wp_enqueue_style('portfolio_style', get_template_directory_uri() . '/build/portfolio.css', array(), $themeVersion, 'all');
        wp_enqueue_script('portfolio_js', get_template_directory_uri() . '/build/portfolio.js', array(), $themeVersion, true);
    }

    wp_localize_script('app_js', 'profileCompanyData', array(
        'root_url' => get_site_url()
    ));
}
add_action('wp_enqueue_scripts', 'tmdr_script_enqueue');



// function admin_style()
// {
//     wp_enqueue_style('admin-styles', get_template_directory_uri() . '/assets/css/admin.css');
// }
// add_action('admin_enqueue_scripts', 'admin_style');

add_filter('get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_author()) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif (is_tax()) { //for custom post types
        $title = sprintf(__('%1$s'), single_term_title('', false));
    } elseif (is_post_type_archive()) {
        $title = post_type_archive_title('', false);
    }
    return $title;
});

//fuction for hide super usery
add_action('pre_user_query', 'yoursite_pre_user_query');
function yoursite_pre_user_query($user_searchs)
{
    global $current_user;
    $username = $current_user->user_login;
    if ($username != 'timedoor') {
        global $wpdb;
    }
}

function banner_shortcode($attr, $content = null, $tag = '')
{
    // print_r($atts);
    ob_start();
    set_query_var('attributes', $attr);
    get_template_part('template-parts/section/section', 'banner');
    return ob_get_clean();
}
add_shortcode('banner_one', 'banner_shortcode');

function service_shortcode($attr, $content = null, $tag = '')
{
    // print_r($atts);
    ob_start();
    set_query_var('attributes', $attr);
    get_template_part('template-parts/section/section', 'services');
    return ob_get_clean();
}
add_shortcode('our_services', 'service_shortcode');

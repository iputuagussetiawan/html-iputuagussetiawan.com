<?php
/*
    Template Name: FAQ
*/
?>

<?php
$pageContactID = get_field('contact_link', 'page_link')->ID;
$contactLink = get_permalink($pageContactID);
$pageNewsID = get_field('news_link', 'page_link')->ID;
$newsLink = get_permalink($pageNewsID);
$contactMeTitle = get_field('contact_me_title', $pageNewsID);
$contactMeDescription = get_field('contact_me_description', $pageNewsID);
?>
<?php get_header(); ?>
<main>
    <h1>FAQ</h1>
</main>

<?php get_footer(); ?>
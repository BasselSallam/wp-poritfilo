<?php

get_header();
$projectPosts = new WP_Query(array(
    'posts_per_page' => -1,
    'post_type' => 'projects',
    'orderby' => 'title',
    'order' => 'ASC',
));
?>
    <h1><?php wp_title() ?></h1>
    <?php
    while ($projectPosts->have_posts()) {
        the_post(); ?>
        <div class="container">
        <h1 class="page-banner__title my-5"><?php the_title(); ?></h1>
        <div class="generic-content my-5"><?php the_content(); ?></div>
</div>

<div>
<?php }

    get_footer();

?>

</div>
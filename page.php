<?php

get_header();

while (have_posts()) {
  the_post(); ?>
  <div class="container">
    <h1 class="page-banner__title my-5"><?php the_title(); ?></h1>
    <div class="generic-content my-5"><?php the_content(); ?></div>
  </div>
<?php }

get_footer();

?>
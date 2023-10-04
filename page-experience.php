<?php

get_header();

?>
<h1><?php wp_title() ?></h1>
<?php
while (have_posts()) {
  the_post(); ?>
  <div class="container">
    <!-- <h1 class="page-banner__title my-5"><?php the_title(); ?></h1>
    <div class="generic-content my-5"><?php the_content(); ?></div> -->

    <article <?php post_class() ?>>
      <div class='entry-header'>
        <h1><?php the_title() ?></h1>
      </div>
      <div class="entry-content">
        <?php the_content() ?>
      </div>


    </article>
  </div>

  <div>
  <?php }

get_footer();

  ?>

  </div>
<?php

get_header();

while (have_posts()) {
  the_post(); ?>
  <div class="container">
    <article <?php post_class() ?>>
      <div class='entry-header'>
        <h1><?php the_title() ?></h1>
      </div>
      <div class="entry-content">
        <?php the_content() ?>
      </div>
    </article>
  </div>
<?php }

get_footer();

?>
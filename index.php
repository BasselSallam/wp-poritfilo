<?php

get_header(); ?>
<main>

    <section class="section-style bg-dark text-white">
        <div class="text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-12 col-md-8 mx-auto text-white">
                    <h1 class="fw-light"><?php $current_user = wp_get_current_user();
                                            echo $current_user->nickname;
                                            ?></h1>
                    <p class="text-white"><?php $content_post = get_post(5);
                                            $content = $content_post->post_content;
                                            echo $content; ?></p>
                    <!-- <p>
                        <a href="#" class="btn btn-primary my-2">Main call to action</a>
                        <a href="#" class="btn btn-secondary my-2">Secondary action</a>
                    </p> -->
                </div>
            </div>

        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">
            <h1 class="text-center fw-light my-5">Big Projects</h1>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php while (have_posts()) {
                    the_post(); ?>
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="card-image"><?php echo get_the_post_thumbnail() ?></div>
                                <p class="float-left"><?php the_excerpt() ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="<?php the_permalink(); ?>" type="button" class="btn btn-sm btn-outline-secondary">View</a>
                                        <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                                    </div>
                                    <small class="text-muted"><?php the_time('Y/m/d g:i:s A'); ?></small>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php  } ?>

            </div>
        </div>
    </div>

    <div class="find-container">
        <div class='find-bg-img'>
            <div class="find-container container">
                <span class='h4 fw-lighter'>Olympic and Paralympic Movements</span>
                <h1>Behind you for what's ahead</h1>
                <span class='d-flex flex-column align-items-center'><span>Allianz is getting behind the Olympic and Paralympic Movements as the Worlwide Insurance Partner from 2021 until 2028</span>
                    <a class="btn find-btn text-uppercase" href="">Find out more</a></span>
            </div>
        </div>
    </div>


    <div class="login-container container">
        <div class='row justify-content-between'>
            <div class='col-5 laptop-man'></div>
            <div class='col-5 text-left text-container'>
                <span class="policy-holder-text">For Allianz Policyholders</span>
                <h2 class="portal-text">Customer <strong>Web Portal</strong></h2>
                <span>Through Allianz Customer Portal, you can view all your insurance policy details, check your investment updates, submit motor insurance claims, pay your outstanding premiums and reach all Allianz services easier and faster.</span>
                <a class="btn login-btn text-uppercase" href="">Login Now</a>
            </div>
        </div>
    </div>

</main>

<?php get_footer();

?>
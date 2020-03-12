<?php

/*
Template Name: Ecosystem
*/

?>


<?php get_header(); ?>

<section class="page-wrap">

    <div class="container">

        <h1> <?php the_title() ?></h1>

        <div class="row inner-box-col">

            <div class="col-lg-12">
                <p class="inner-box-title"> iPC project ecosystem </p>
            </div>

            <div class="col-lg-12">
                <p><a class="inner-box-link" href="https://hgserver1.amc.nl/cgi-bin/r2/main.cgi" target="_blank"> - R2: Genomics Analysis and Visualization Platform </a></p>
            </div>

            <div class="col-lg-12">
                <p><a class="inner-box-link" href="http://blueprint-data.bsc.es/release_2016-08/#!/" target="_blank"> - BLUEPRINT / EPICO Data Analysis Portal  </a></p>
            </div>

        </div>

        <?php get_template_part('includes/section', "content"); ?>

    </div>

</section>

<?php get_footer(); ?>
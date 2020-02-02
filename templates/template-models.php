<?php

/*
Template Name: Models
*/

?>


<?php get_header(); ?>

<section class="page-wrap">

    <div class="container">

        <h1> <?php the_title() ?></h1>

        <div class="row inner-box-col">

            <div class="col-lg-12">
                <p class="inner-box-title"> Model examples </p>
            </div>

            <div class="col-lg-12">
                <p><a class="inner-box-link" href="https://kipoi.org" target="_blank"> - Kipoi: Statistics  </a></p>
            </div>

            <div class="col-lg-12">
                <p><a class="inner-box-link" href="https://kipoi.org/groups/" target="_blank"> - Kipoi: Models </a></p>
            </div>

            <div class="col-lg-12">
                <p><a class="inner-box-link" href="https://modelzoo.co" target="_blank"> - ModelZoo  </a></p>
            </div>

        </div>

        <?php get_template_part('includes/section', "content"); ?>

    </div>

</section>

<?php get_footer(); ?>
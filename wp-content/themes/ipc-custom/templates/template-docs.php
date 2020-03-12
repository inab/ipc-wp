<?php

/*
Template Name: Docs
*/

?>


<?php get_header(); ?>

<section class="page-wrap">

    <div class="container">

        <h1> <?php the_title() ?></h1>

        <div class="row inner-box-col">
            <div class="col-lg-12">
                <p class="inner-box-title"> Data analysis: openVRE </p>
            </div>

            <div class="col-lg-12">
                <p><a class="inner-box-link" href="/dataportal/?page_id=740"> 1) Why bringing your tool to openVRE? </a></p>
            </div>

            <div class="col-lg-12">
                <p><a class="inner-box-link" href="/dataportal/?page_id=730"> 2) Instructions </a></p>
            </div>

            <div class="col-lg-12">
                <p><a class="inner-box-link" href="/dataportal/?page_id=697"> 3) Integration of tools </a></p>
            </div>
        </div>
        <br>
        <div class="row inner-box-col">
            <div class="col-lg-12">
                <p class="inner-box-title"> Data management: Overture Arranger </p>
            </div>

            <div class="col-lg-12">
                <p><a class="inner-box-link" href="https://arranger.readthedocs.io/en/latest/src/gettingstarted.html" target="_blank"> 1) Arquitecture and indexing test data (Kids first) </a></p>
            </div>

            <div class="col-lg-12">
                <p><a class="inner-box-link" href="https://arranger.readthedocs.io/en/latest/src/admins.html" target="_blank"> 2) Using the Admin UI   </a></p>
            </div>

            <div class="col-lg-12">
                <p><a class="inner-box-link" href="<?php echo get_page_link(1585)?>" target="_blank"> 3) Example </a></p>
            </div>

        </div>

        <?php get_template_part('includes/section', "content"); ?>

    </div>

</section>

<?php get_footer(); ?>
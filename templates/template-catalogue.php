<?php

/*
Template Name: Catalogue
*/

?>


<?php get_header(); ?>

<section class="page-wrap">

    <div class="container">

        <h1><?php the_title() ?></h1>

        <div class="row inner-box-col">

            <div class="col-lg-4 inner-box-col-content">
                <div class="row">
                    <p> <strong> iPC Catalogue </strong> builds on the metadata provided by project’s data repositories. These include the participating data cohorts, as 
                    <a href="https://ega-archive.org" target="_blank">EGA</a> archive, as well as <a href="https://www.ncbi.nlm.nih.gov/gap/" target="_blank"> dbGAP </a> and 
                    Cavatica aggregated data. Cohorts data could be managed by <a href="https://www.obiba.org/" target="_blank">OBiBa software stack</a> or <a href="https://www.overture.bio/" target="_blank"> 
                    Overture Arranger </a> or similar. Basic access to the Data Catalogue would be public, but controlled access can be also enabled to provide more detailed information. </p>
                </div>

                <div class="row">
                    <div class="col-lg-12 text-center">
                        <a aria-label="Access Overture" class="button-link" href="<?php echo get_page_link(1585)?>" target="_blank">Access iPC Catalogue</a>
                    </div>
                </div>
                <br>
            </div>

            <div class="col-lg-8">
                <div class="inner-box-col-img">
                    <img src="<?php echo get_template_directory_uri() ?>/img/IPC_platform.png" alt="">
                </div>
            </div>

        </div>

        <?php get_template_part('includes/section', "content"); ?>

    </div>

</section>

<?php get_footer(); ?>

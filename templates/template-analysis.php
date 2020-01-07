<?php

/*
Template Name: Analysis
*/

?>


<?php get_header(); ?>

<section class="page-wrap">

    <div class="container">

        <h1><?php the_title() ?></h1>

        <div class="row inner-box-col">

                <div class="col-lg-4 inner-box-col-content">
                    <div class="row">
                        <p> <strong> iPC Virtual Research Environment (VRE) </strong> will be the workspace for authenticated users. For each user’s role, an specific workspace will be provided. </p>
                        <p> iPC openVRE will adopt workflows from Cavatica’s Kids First and tools to organize and query relational graphs. </p>
                        <p> The workspace will combine analysis tools, data visualization, management tools, and access to the granted data. </p>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <a aria-label="Access iPC VRE (opens in a new tab)" class="button-link" href="http://vre.ipc-project.bsc.es/" target="_blank">Access iPC VRE</a>
                        </div>
                        <div class="col-lg-8">
                            <a aria-label="Access Cavatica Kids First" class="button-link" href="https://cavatica.squarespace.com/" target="_blank">Access Cavatica</a>
                        </div>
                    </div>

                </div>

                <div class="col-lg-8">
                    <div class="inner-box-col-img">
                        <img src="<?php echo get_template_directory_uri() ?>/img/VRE.png" alt="">
                    </div>
                </div>

        </div>

            <?php get_template_part('includes/section', "content"); ?>
   
    </div>

</section>

<?php get_footer(); ?>
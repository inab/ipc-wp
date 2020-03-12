<?php

/*
Template Name: Overture_infrastructure
*/

?>

<?php get_header();?>

<section class="page-wrap">

    <div class="container">

        <h1><?php the_title()?></h1>

        <div class="row inner-box-col">

                <div class="col-lg-4 inner-box-col-content">
                    <div class="row">
                        <p> <strong> iPC Virtual Research Environment (VRE) </strong> will be the workspace for authenticated users. For each user’s role, an specific workspace will be provided. </p>
                        <p> iPC openVRE will adopt workflows from Cavatica’s Kids First and tools to organize and query relational graphs. </p>
                        <p> The workspace will combine analysis tools, data visualization, management tools, and access to the granted data. </p>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="inner-box-col-img">
                        <img src="<?php echo get_template_directory_uri() ?>/img/overture_arranger_arquitecture.png" alt="">
                    </div>
                </div>

        <?php get_template_part('includes/section', "content");?>

    </div>

</section>

<?php get_footer();?>
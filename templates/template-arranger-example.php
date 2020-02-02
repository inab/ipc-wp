<?php

/*
Template Name: Arranger example
*/

?>


<?php get_header(); ?>

<section class="page-wrap">

    <div class="container">

        <h1> <?php the_title() ?></h1>

        <div class="row inner-box-col">
            <div class="col-lg-12">
                <p class="inner-box-title"> Kibana: ES indexing from UI </p>
            </div>
            <div class="col-lg-12 inner-box-col-img">
                <img src="<?php echo get_template_directory_uri() ?>/img/kibana.png"> 
            </div>

        </div>

        <div class="row inner-box-col">
            <div class="col-lg-12">
                <p class="inner-box-title"> Admin UI: Assigning an ES index to our project </p>
            </div>
            <div class="col-lg-12 inner-box-col-img">
                <img src="<?php echo get_template_directory_uri() ?>/img/arranger_ui.png"> 
            </div>

        </div>

        <div class="row inner-box-col">
            <div class="col-lg-12">
                <p class="inner-box-title"> React storybook: UI components for data visualization </p>
            </div>
            <div class="col-lg-12 inner-box-col-img">
                <img src="<?php echo get_template_directory_uri() ?>/img/storybook.png"> 
            </div>

        </div>


        <?php get_template_part('includes/section', "content"); ?>

    </div>

</section>

<?php get_footer(); ?>
<?php

/*
Template Name: Overture_installation
*/

?>

<?php get_header(); ?>

<section class="page-wrap">

    <div class="container">

        <h1><?php the_title() ?></h1>

        <p>
            1. Starting with some Elasticsearch (ES) indices with mappings. Arranger makes no assumption about your data model.
            Model your index mappings and index them. For demo convenience, you can follow a tutorial bellow to index some test
            data from our Kids First project.
        </p>

        <p>
            2. Create an API version for your project from Arranger Admin.
            <ul>
                <li> From your browser, navigate to http://localhost:8080 </li>
                <li>Click “Add Project”</li>
                <li>Input your project id in snake_case</li>
                <li>Click “Add Index” for each index you want to expose from ES, with the following fields:</li>
                <ul>
                    <li>“Name”: any name for your index, in camelCase</li>
                    <li>“ES Index”: the index that you want to expose</li>
                    <li>“ES Type”: the type that you want to expose</li>
                </ul>
                <li>Click “Add” once finalized.</li>
                <li>Navigate into your newly registered project’s configuration and ensure that “Has Mapping” is “yes” for all indices registered.</li>
                <li>Configure your project from the API and click “Save” to save as a new project.</li>
            </ul>
        </p>

        <p>

        </p>

        <?php get_template_part('includes/section', "content"); ?>

    </div>

</section>

<?php get_footer(); ?>
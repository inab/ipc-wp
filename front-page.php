<?php get_header();?>


<div class="container-fluid" style="padding:0">

    <div class="parent">
        <img alt="overlay" src="<?php echo get_template_directory_uri() ?>/img/favicon/iPC_4c.png"/>
        <img alt="background" src="<?php echo get_template_directory_uri() ?>/img/front-img.jpg"/>
    </div>

    <div class="row">
        <div class="col-lg-12 text-center mb-5">
            <h1> How does the platform work?</h1>
        </div>

        <div class="col-lg-6 pl-5">
            <p>iPC platform gathers patient's data from different sources and also data analysis tools in 
            an integrated environment.</p> 
            <p>Data catalogues will be easily managed incorporating existing open source solutions. </p>
            <p>Data analysis will be performed by using open Virtual Research Environment (openVRE) and Cavatica.</p> 
        </div>

        <div class="col-lg-6 text-center inner-box-col-img">
            <img alt="" src="<?php echo get_template_directory_uri() ?>/img/IPC_platform.png"/>
        </div>

    </div>

    <div id="resources-bg">
        <div class="row mt-5"> 
            <div class="col-lg-6 text-left mt-5 pl-5">
                <h1> Platform resources </h1>
            </div>
            <div class="col-lg-6 text-center mt-5">
                <a href="<?php echo get_page_link(1471) ?>" class="btn btn-outline-success font-weight-bold"> Search data</a>
                <a href="<?php echo get_page_link(1460) ?>" class="btn btn-outline-success font-weight-bold"> Data analysis</a>
                <a href="<?php echo get_page_link(1469) ?>" class="btn btn-outline-info font-weight-bold"> Documentation</a>
            </div>  
        </div>
    </div>

</div>
    
    <?php get_template_part('includes/section', "content");?>

</div>

<?php get_footer();?>
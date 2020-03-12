<?php get_header();?>


<div class="container-fluid" style="padding:0">
    <!--
    <div class="parent">
        <img alt="overlay" src="<?php echo get_template_directory_uri() ?>/img/favicon/iPC_4c.png"/>
        <img alt="background" src="<?php echo get_template_directory_uri() ?>/img/front-img.jpg"/>
    </div>
    -->

    <!-- <div style="display: flex; justify-content: center;"> 
            <div>
                <img alt="overlay" src="<?php echo get_template_directory_uri() ?>/img/favicon/iPC_4c.png"/> 
            </div>
            <div>
                <p style="margin-top: -40px; font-style: sans-serif; font-size: 2.5rem; font-weight: bold;"> 
                    <span style="color: #75B9BE">Data </span> 
                    <span style="color: #CAD461"> Portal </span> 
                </p>
            </div>
        </div>
    -->

    <div class="row text-center"> 
        <div class="col-12">
            <img alt="overlay" src="<?php echo get_template_directory_uri() ?>/img/favicon/iPC_4c.png"/> 
        </div>
    </div>
    <div class="row text-center">
        <div class="col-12">
            <p style="margin-top: -40px; font-style: sans-serif; font-size: 2.5rem; font-weight: bold;"> 
                <span style="color: #75B9BE">Data </span> 
                <span style="color: #CAD461"> Portal </span> 
            </p>
        </div>
    </div>

    <div>
        <?php if (is_user_logged_in()) : ?>
            <?php global $current_user; get_currentuserinfo(); ?>
                <strong> <span style="color: black;">	User info: <?php echo $current_user->email_verified; ?> ! </span> </strong>
				<strong> <span style="color: black;">	Token: <?php echo wp_get_session_token(); ?> ! </span> </strong>
        <?php endif;?>
    </div>

    <div class="row">
        <div class="col-lg-12 text-left mt-5 mb-5 pl-5">
            <h1> How does the platform work?</h1>
        </div>

        <div class="col-lg-6 pl-5" style="align-self: center; font-size: 1.4rem;">
            <p>iPC platform gathers data from different sources and also data analysis tools in 
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
                <a href="<?php echo get_page_link(1471) ?>" class="btn btn-outline-info font-weight-bold"> Search data</a>
                <a href="<?php echo get_page_link(1460) ?>" class="btn btn-outline-success font-weight-bold"> Data analysis</a>
                <a href="<?php echo get_page_link(1569) ?>" class="btn btn-outline-info font-weight-bold"> Ecosystem</a>
                <a href="<?php echo get_page_link(1571) ?>" class="btn btn-outline-success font-weight-bold"> Models </a>
                <a href="<?php echo get_page_link(1469) ?>" class="btn btn-outline-info font-weight-bold"> Documentation</a>
            </div>  
        </div>
    </div>

</div>
    
    <?php get_template_part('includes/section', "content");?>

</div>

<?php get_footer();?>
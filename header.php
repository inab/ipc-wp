<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8" />

    <title>iPC Portal</title>

    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() ?>/img/favicon/iPC_4c.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() ?>/img/favicon/iPC_4c.png">

    <?php wp_head(); ?>

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark" role="navigation">
            <a class="navbar-brand logo-header" href="<?php echo esc_url(home_url('/')); ?>" rel="Home"></a>
                <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#whatever" aria-controls="whatever" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php
                    wp_nav_menu( array(
                    'theme_location'    => 'top-menu',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'whatever',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ) );
                ?>

                
                <div class="social-display-header">
                    <ul>
                        <li>
                            <a href="https://twitter.com/iPC_H2020" target="_blank" class="fab fa-twitter"></a>
                        </li>

                        <li>
                            <a href="https://www.linkedin.com/company/ipcproject" target="_blank" class="fab fa-linkedin"> </a>
                        </li>

                        <li>
                            <a href="https://vimeo.com/technikon" target="_blank" class="fab fa-vimeo"> </a>
                        </li>
                       
                        <li>
                            <a href="https://euvation.eu/" target="_blank">
                                <img src="https://ipc-project.eu/wp-content/themes/ipc_theme/pics/euvation_icon.svg" style="width: 10%; height: 10%">
                            </a>
                        </li>
                    </ul>
                </div>     
        </nav>   
    </header>



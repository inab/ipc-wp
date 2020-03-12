<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fdg
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
	
	<!-- 	favicon 	-->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/img/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() ?>/img/favicon/iPC_4c.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() ?>/img/favicon/iPC_4c.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri() ?>/img/favicon/site.webmanifest">
	<link rel="mask-icon" href="<?php echo get_template_directory_uri() ?>/img/favicon/safari-pinned-tab.svg" color="#00738c">
	<meta name="msapplication-TileColor" content="#00738c">
	<meta name="theme-color" content="#ffffff">
	<!-- 	favicon 	-->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="breakpage">
		<div class="top-gradient"></div>
		<div class="wrapper cf">
			<div class="site-branding">
					<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"></a>
			</div><!-- .site-branding -->
			<nav id="site-navigation" class="main-navigation"> 
<!--<?php echo wp_nav_menu('iPC-project' )?>-->
				<a class="menu-news" href="<?php echo home_url('/')?>">Home</a>
				<a class="menu-news" target="blank" href="https://ipc-project.eu/">iPC project</a>
				<a class="menu-news <?php if (is_page('598')) {echo 'selected';}?> " href="<?php echo get_page_link(598) ?>">Data catalogue</a>
				<a class="menu-news <?php if (is_page('603')) {echo 'selected';}?> " href="<?php echo get_page_link(603) ?>">Data access</a>
				<a class="menu-news <?php if (is_page('1044')) {echo 'selected';}?> " href="<?php echo get_page_link(1044) ?>">Data analysis</a>
				<a class="menu-news" target = "blank" href="https://inb.bsc.es/auth/realms/euCanSHare/protocol/openid-connect/auth?response_type=code&client_id=agate&redirect_uri=https%3A%2F%2Fagate.eucanshare.bsc.es%2Fauth%2Fcallback%2Feucanshare&scope=openid&state=rnz13QKU1WqEcgD7hNMcIjgo2kdnMolTCQgPwZx_Me0&nonce=NYhCtWYKlq57OC6TItU5iiD8s9jPCkHk_PAkBbzW87I">My Workspace</a>
				<a class="menu-news <?php if (is_page('629')) {echo 'selected';}?> " href="<?php echo get_page_link(629) ?>">DOCUMENTATION</a>
				<!--<a clhss="menu-contatti last <?php if (is_page('608')){ echo 'selected';}?>"  href="<?php echo get_page_link(608) ?>" >SUPPORT</a>-->
			</nav>
			<div id="menu"></div>
		</div>			
</header><!-- #head -->

	<?php if(is_page('Project')) { ?>
		<?php get_template_part("inc/submenu"); ?>
	<?php } ?>



	<div id="main-content">
		
<div class="social-bar cf">
	<ul class='social'>
	  <li style="margin:0">
	    <a href="https://twitter.com/iPC_H2020" target="_blank" class="fab fa-twitter">    
	      <span>Twitter</span>
	    </a> 
	  </li>
	  
	  <li style="margin:0">
	    <a href="https://www.linkedin.com/company/ipcproject" target="_blank" class="fab fa-linkedin">
	      <span>Linkedin</span>
	    </a>
	  </li>

		<li style="margin:0">
	    <a href="https://vimeo.com/technikon" target="_blank" class="fab fa-vimeo">
	      <span>Vimeo</span>
	    </a>
	  </li>
	  
	  <li style="margin:0">
	    <a href="https://euvation.eu/" target="_blank">
			<span>EUVATION</span>
			<img src="https://ipc-project.eu/wp-content/themes/ipc_theme/pics/euvation_icon.svg">
	    </a> 
	  </li>
	  
	</ul>
</div>

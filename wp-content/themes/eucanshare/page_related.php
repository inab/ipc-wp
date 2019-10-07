<?php
/**
 * Template Name: page-related
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fdg
 */
 
get_header(); ?>


<div class="page-template-page_related">

	
    <?php while ( have_posts() ) : the_post(); ?>
		<section id="gallerycontent" class="breakpage">
				<div class="wrapper ">
				     	<h2 class="section-title"><?php the_title();?></h2>  
				</div>
		</section>	

	<?php endwhile; ?>
		
	<?php wp_reset_postdata(); ?>
	<?php wp_reset_query(); ?>	
		

<section class=" related-tab-list tab-list"> 
<?php if( have_rows('generate_related_projects') ): ?>
	<?php while( have_rows('generate_related_projects') ): the_row(); 

	// vars
		$image = get_sub_field('partner_logo');
		$link = get_sub_field('link');
		$mail = get_sub_field('mail');
		$facebook = get_sub_field('facebook');
		$twitter = get_sub_field('twitter');
		
		$description = get_sub_field('description');
		$start = get_sub_field('start');
		$end = get_sub_field('end');
	
		$logo_coordinator = get_sub_field('logo_coordinator');
		$link_coordinator = get_sub_field('link_coordinator');
		?>

<!----------------------
	ITEM 
----------------------->	
<div class="item cf">
	<div class="wrapper cf">
		<div class="logo-container">
				<?php if(!empty($link)) {?>
					<a target="_blank" href="<?php echo $link; ?>">
				<?php } ?> 	
					<img class="logo-related" src="<?php echo $image ?>"/>
				</a>
				<div class="item-contact">
					<?php if(!empty($mail)) {?><p><a href="mailto:<?php echo $mail; ?>">  <i class="far fa-envelope"></i></a></p><?php } ?> 
					<?php if(!empty($facebook)) {?><p><a target="_blank" href="<?php echo $facebook; ?>"> <i class="fab fa-facebook-square"></i></a></p><?php } ?> 
					<?php if(!empty($twitter)) {?><p><a target="_blank" href="<?php echo $twitter; ?>"> <i class="fab fa-twitter"></i></a></p><?php } ?> 
				</div>
				
		</div>
		<div class="item-content">
			<div class="description">
				<?php echo $description; ?>
			</div>
			<div class="item-date cf">
				<p>Start date: <strong><?php echo $start ?></strong></p>
				<p>End date: <strong><?php echo $end ?></strong></p>
				<div class="item-coordinator cf">
					<p>Coordinating institution:</p>
					
					<a target="_blank" <?php if(!empty($link_coordinator)) {?> href="<?php echo $link_coordinator; ?>" <?php } ?> >
						<div class="logo-coordinator" style="background-image:url(<?php echo $logo_coordinator['url']; ?>);"></div>
					</a>
				</div>
			</div>
			
		</div>
	</div>
</div>

		
		
		<?php endwhile; ?>
<?php endif; ?>

</section>

</div>


<?php get_footer(); ?>

 	

<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package fdg
 */

get_header();
?>

<?php 				
	$do_not_duplicate = $post->ID;
	
	$date = get_field('date');
	 
?>

	<?php  $terms = get_the_category($post->ID); ?>
    <?php while ( have_posts() ) : the_post(); ?>
<section id="" class="<?php foreach($terms as $term) { if($term->slug === 'news') {echo 'single-news';} elseif($term->slug === 'events') {echo 'single-events'; }} ?>">
    <div class="single-item">  
		<div class="item-img cover cover-center primary-image">
			<img style="height: auto; width: 100%; max-width: 100%; display: block;" src="<?php echo  the_post_thumbnail_url('large');  ?>"/>
		</div>
		<div class="credit"><?php echo get_field('credit'); ?></div>
    </div>
			
	<?php if(is_singular('post')) { ?>
		<section id="gallerycontent" class="breakpage">
				<div class="wrapper content-single">
					
					<div class="item-info">
						<?php if($terms): ?>
						<div class=" item-category">
							<?php foreach ( $terms as $term ) { echo $term->name; } ?>
						</div>
						<?php endif; ?>
						<div class=" item-date">
							<?php if(!empty($date)) {?>
								 <?php echo $date; ?> 
							<?php } ?>
						</div>
					</div>
					<h1 class="title"><?php the_title();?></h1>	
					

				        <div class="content">
				           <?php the_content(); ?>
				        </div>			
				</div>
		</section>	
	
	<?php } ?>
	

        <?php include("inc/paginazione.php"); ?>

	
</section>

	
	<?php endwhile; ?>




<?php get_footer(); ?>

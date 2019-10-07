<?php
/**
 * Template Name: page_archive_news
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


<div class="template-default archivio archivio-news">

	
	    <?php while ( have_posts() ) : the_post(); ?>
			<section id="gallerycontent" class="breakpage">
					<div class="wrapper ">
					     	<h2 class="section-title"><?php the_title();?></h2>  
	
					</div>
			</section>	


	<?php endwhile; ?>
		
	<?php wp_reset_postdata(); ?>
	<?php wp_reset_query(); ?>	
	


        <div class="list">
	        <div class="wrapper cf grid news">
		<?php 
		query_posts(array( 
			'post_type' => 'Post',
			'showposts' => 99
			));  
				?>
		<?php while ( have_posts() ) : the_post(); 
				$text = get_the_content();
				$words = 20;
				$excerpt = wp_trim_words( $text, $words );
				?>
		<div class="item item-3">
			<?php get_template_part("inc/newscard-archive"); ?>
		</div>


      	<?php endwhile; ?>        
	        </div>
        </div>	


	
</div>


<?php get_footer(); ?>



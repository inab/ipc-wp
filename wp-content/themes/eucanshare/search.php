<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package fdg
 */

get_header();
?>

<div class="template-default">
	<section id="" class="breakpage">
		<?php if ( have_posts() ) : ?>
		<div class="item-img cover cover-center primary-image" style="background-image:url(<?php echo  the_post_thumbnail_url('large');  ?>)"></div>
			<div class="wrapper">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'fdg' ), '<span>' . get_search_query() . '</span>' );
					?>
			        <div class="list">
					<div class="wrapper cf grid">
					<?php
						/* Start the Loop */
						while ( have_posts() ): the_post(); 
						
							$text = get_the_content();
							$words = 20;
							$excerpt = wp_trim_words( $text, $words );
						?>
			        	<a href="<?php echo get_permalink(); ?>" class="item item-row">
				        	<div class="item-img cover cover-center" style="background-image:url(<?php echo  the_post_thumbnail_url('large');  ?>)"></div>
				        	<div class="img-content">
					        	<div class="title"><?php the_title();?></div>
					        	<div class="caption"><?php echo $excerpt; ?></div>
				        	</div>
			        	</a>			
						
						<?php
						endwhile; 
						the_posts_navigation();
						endif;
						?>
					</div>
					</div>
			</div>
	</section>	
</div>



<?php
get_footer(); ?>

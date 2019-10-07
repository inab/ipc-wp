<?php
/**
 * The template for displaying all pages
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

get_header();
?>

<section id="" class=" page-default single">
	<div class="item-img cover cover-center primary-image " style="background-image:url(<?php echo  the_post_thumbnail_url('large');  ?>)"></div>

	<div class="wrapper overlap">
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="content-overlap">
	        <h1 class="title"><?php the_title();?></h1>        
	        <div class="content">
	           <?php the_content(); ?>
	        </div>
		</div>        
	             
        <?php endwhile; ?>

			<?php if( is_page( '44' ) ): $section= 'cantina';
			 elseif( is_page( '47' ) ): $section= 'comunicazione';
			 elseif( is_page( '49') ): $section= 'marketing'; 
			 endif;
			 ?>
		<?php 
		$lavori = get_posts(array(
			'post_type' => 'lavoro',
			'taxonomy' => 'categorielavori_categories',
			'categorielavori_categories' => $section
					)); 
		?>		
		<?php if( $lavori ): ?>

	
			<div class="content-single list-lavori">
	 	        <h1 class="section-title">Lavori</h1>  
					<div class="cf grid">
					<?php foreach( $lavori as $lavoro ): ?>
							
							 <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $lavoro->ID ), 'medium' ); ?>							
							<a class="item item-3 cover cover-center" href="<?php echo get_permalink( $lavoro->ID ); ?>" 
							   style="background-image:url(<?php echo $image[0]; ?>)">
							   		<div class="title"><?php echo get_the_title( $lavoro->ID ); ?></div>
							   		<div class="plus ico"></div>
									<?php  $i=3; $terms = get_the_terms( $lavoro->ID , 'categorielavori_categories'  ); 
			            			foreach ( $terms as $term ) { if  ($term->slug != 'evidenza') { ?>
									<div class="category" style="top:<?php echo $i . '0px'; ?>"><?php echo $term->name ?></div>									
									<?php 		
									$i++;
									$i++;
									} }?>
								
							</a>
							
					<?php endforeach; ?>
		 	        </div>      
	 		</div>
		<?php endif; ?>	



	</div>
</section>



<?php
get_footer();

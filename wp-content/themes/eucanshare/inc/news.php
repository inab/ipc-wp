<?php 
query_posts(array( 
	'post_type' => 'Post',
	'showposts' => 10,
));  

?>
<section class="breakpage news">
<!--  	        <h1 class="section-title">NEWS</h1>         -->
 	        <div class="s-news swiper-container">
	 	        <div class="swiper-wrapper">
				<?php while ( have_posts() ) : the_post();?>
		 	        <div class="swiper-slide">
		 				<?php get_template_part("inc/newscard"); ?>
			 	    </div>
			 	<?php endwhile;  ?>					


	 	        </div>

	 		 <!-- Add Pagination -->
   			 <div class="swiper-pagination"></div>



 	        </div>
</section>


<?php wp_reset_postdata(); ?>
<?php wp_reset_query(); ?>	
		 	  		 	        
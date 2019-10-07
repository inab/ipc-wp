<?php 
query_posts(array( 
	'post_type' => 'Post',
	'showposts' => 6,
));  

?>
<section class="breakpage social">
	<div class="wrapper cf">

		<div class="youtube">
			<iframe src="https://www.youtube.com/embed/zqBV-qZUvzU" 
			frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
			</iframe>
		</div>
		
		
		<div class="twitter">
			<?php echo do_shortcode( '[custom-twitter-feeds]' ) ?>
		</div> <!-- twitter -->

	</div>

</section>

<?php wp_reset_postdata(); ?>
<?php wp_reset_query(); ?>	
		 	  		 	        
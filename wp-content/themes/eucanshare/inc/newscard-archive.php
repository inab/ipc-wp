<?php 				
	$do_not_duplicate = $post->ID;
	
	$text = get_the_content();
	$words = 15;
	$excerpt = wp_trim_words( $text, $words );
	$date = get_field('date');
	$place = get_field('place');
	$credit = get_field('credit');
	$terms = get_the_category($post->ID); 
	 ?>

<div class="item-card 
	<?php foreach($terms as $term) { if($term->slug === 'news') {echo 'card-news';} elseif($term->slug === 'events') {echo 'card-events'; }} ?>
" >
	
    <div class="item-header">
    	<a href="<?php echo get_permalink(); ?>" class="item-img cover-center cover">
	           <img style="height: auto; width: 100%; max-width: 100%;" src="<?php echo  the_post_thumbnail_url('large');  ?>"/>
	           
           </a>
		<div class="item-info item-category"><?php foreach($terms as $term) { echo $term->name;  } ?></div>

		<div class="item-info item-date hide-element">
				<?php if(!empty($date)) {?>
					<i class="far fa-calendar-alt"></i> <?php echo $date; ?> 
				<?php } ?>
		</div>
		
		<div class="item-info item-place hide-element">
				<?php if(!empty($place)) {?>
				<i class="fas fa-map-marker-alt"></i> <?php echo $place; ?> 
				<?php } ?>	
		</div>
<!-- 		tooltip -->
		<div class="css-tooltip right cf">
			<?php if(!empty($credit)) {?>
			<i class="fa fa-info-circle"></i>
				<span class="tt-content">
						<?php echo $credit; ?>
					<i></i>
				</span>    
			<?php } ?>   
		</div>	
<!-- 		tooltip -->			
    </div>
    
    <div class="item-content">
	    <div class="item-date-home hide-element-archive">
				<?php if(!empty($date)) {?>
					 <?php echo $date; ?> 
				<?php } ?>
		</div>
	   	<a href="<?php echo get_permalink(); ?>" class="item-title">
		   	<?php echo wp_trim_words( get_the_title(), 5, '...' ); ?>
	    </a>
   		<div class="excerpt"><?php echo $excerpt; ?> </div>
    </div>
</div>




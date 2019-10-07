<?php $prevPost = get_previous_post();
	  $nextPost = get_next_post(); ?>
	  
<?php 
	 if($prevPost): {
	$archvivePage = get_post_type( $prevPost->ID ); 
	 } else : {
	$archvivePage = get_post_type( $nextPost->ID ); 
	 }
	 endif;
	$archvivePage = get_post_type( $prevPost->ID ); 
	
	if($archvivePage == 'post') {
		$idPage = 26;
	}	
?>
	  
	  
<?php if(($prevPost) || ($nextPost)) { ?>
<div class="divider wrapper "></div>
	<div class="wrapper pagination cf">
		<div class="nav-prev nav-item cf">
		<?php 
			 if($prevPost):
			    $prevthumbnail = get_the_post_thumbnail($prevPost->ID,array(80,80)); ?>
			    <?php previous_post_link('%link', $prevthumbnail); ?>
			    <a class="pagination-content" href="<?php echo get_permalink($prevPost->ID); ?>">
			    	<h3>Prev</h3>
			    	<h2><?php echo get_the_title($prevPost->ID); ?></h2>
			    </a>
				<?php else :?>
			    <a href="<?php echo get_page_link($idPage)?>" rel="prev">
				    <div style="width: 80px;height: 80px;display: block; background-color: #164990;float: right; border-radius: 300px;" class="attachment-80x80 size-80x80 wp-post-image" alt=""></div>
				</a>
				<a class="pagination-content" href="<?php echo $urlPage; ?>">
		    		<h3>All</h3>
				</a>
			    
			<?php endif;?>

		</div>
	
		<div class="nav-next nav-item cf">
			<?php if($nextPost):
			    $nextthumbnail = get_the_post_thumbnail($nextPost->ID,array(80,80)); ?>
			    <?php next_post_link('%link', $nextthumbnail); ?>
			    <a class="pagination-content" href="<?php echo get_permalink($nextPost->ID); ?>">
			    	<h3>Next</h3>
			    	<h2><?php echo get_the_title($nextPost->ID); ?></h2>
			    </a>
				<?php else :?>
			    <a href="<?php echo get_page_link($idPage)?>" rel="next">
				    <div style="width: 80px;height: 80px;display: block; background-color: #164990;float: right;border-radius: 300px;" class="attachment-80x80 size-80x80 wp-post-image" alt=""></div>
				</a>
				<a class="pagination-content" href="<?php echo $urlPage; ?>">
		    		<h3>All</h3>
			    	
				</a>

			<?php endif;?>
		</div>
	</div>
<?php } ?>
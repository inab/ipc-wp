<!--
CONSORTIUM
-->

	 <?php if( have_rows('add_consortium') ): ?>
        <div class="consortium-list">
	        <div class="breakpage cf">
				<div class="swiper-container s-consortium">
					<div class="swiper-wrapper">
				    <?php while( have_rows('add_consortium') ): the_row(); ?>
				   <?php $img = get_sub_field('consortium_logo'); ?>
								<div class="swiper-slide">
									<a target="_blank" class="img-contain  cover-center" 
									   style="background-image:url(<?php echo $img['url']; ?>)" href="<?php the_sub_field('consortium_link'); ?>">
									</a>
								</div>
				    <?php endwhile; ?>
					</div>
				</div>
			</div>
        </div>	
		<?php endif; ?>
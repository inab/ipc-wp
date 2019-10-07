<div class="wrapper">
	<h2 class="section-title">Publications and materials</h2>


<!-- accordion_01 -->

<!--
	<div class="accordion">
		<div class="accordion-head">
			<div class="accordion-title cf">
				<p>Peer-review publications
					<span class="icon"></span>
				</p>
			</div> 
		</div>
		
		<div class="accordion-content table">
		<?php if( have_rows('generate_peer_review') ): ?>
			<?php while( have_rows('generate_peer_review') ): the_row(); 
			// vars
				$name = get_sub_field('name');
				$description = get_sub_field('description');
				$link = get_sub_field('link');
				?>					
			<div class="content">
				<div class="item-content cf">
					<div class="material">
						<h2><?php echo $name; ?></h2>
						<p><?php echo $description; ?></p>
					</div>
					<div class="view">
						<a class="btn primary" target="_blank" href="<?php echo $link; ?>"> view</a>
					</div>		
				</div>					
			</div>
			<?php endwhile; ?>
		<?php endif; ?>		
		</div>
		
	</div>
-->
				
<!-- accordion_02 -->

	<div class="accordion">
		<div class="accordion-head">
			<div class="accordion-title cf">
				<p>Press releases
					<span class="icon"></span>
				</p>
			</div> 
		</div>
		
		<div class="accordion-content table">
		<?php if( have_rows('generate_press_release') ): ?>
			<?php while( have_rows('generate_press_release') ): the_row(); 
			// vars
				$name = get_sub_field('name');
				$description = get_sub_field('description');
				$link = get_sub_field('link');
				?>					
			<div class="content">
				<div class="item-content cf">
					<div class="material">
						<h2><?php echo $name; ?></h2>
						<p><?php echo $description; ?></p>
					</div>
					<div class="view">
						<a class="btn primary" target="_blank" href="<?php echo $link; ?>"> view</a>
					</div>		
				</div>					
			</div>
			<?php endwhile; ?>
		<?php endif; ?>		
		</div>
		
	</div>
	


<!-- accordion_03 -->

<!--
	<div class="accordion">
		<div class="accordion-head">
			<div class="accordion-title cf">
				<p>Presentations
					<span class="icon"></span>
				</p>
			</div> 
		</div>
		
		<div class="accordion-content table">
		<?php if( have_rows('generate_presentations') ): ?>
			<?php while( have_rows('generate_presentations') ): the_row(); 
			// vars
				$name = get_sub_field('name');
				$description = get_sub_field('description');
				$link = get_sub_field('link');
				?>					
			<div class="content">
				<div class="item-content cf">
					<div class="material">
						<h2><?php echo $name; ?></h2>
						<p><?php echo $description; ?></p>
					</div>
					<div class="view">
						<a class="btn primary" target="_blank" href="<?php echo $link; ?>"> view</a>
					</div>		
				</div>					
			</div>
			<?php endwhile; ?>
		<?php endif; ?>		
		</div>
		
	</div>	
-->
			
				
<!-- accordion_04 -->
	<div class="accordion">
		<div class="accordion-head">
			<div class="accordion-title cf">
				<p>Deliverables
					<span class="icon"></span>
				</p>
			</div> 
		</div>
		
		<div class="accordion-content table">
		<?php if( have_rows('generate_deliverables') ): ?>
			<?php while( have_rows('generate_deliverables') ): the_row(); 
			// vars
				$name = get_sub_field('name');
				$description = get_sub_field('description');
				$link = get_sub_field('link');
				?>					
			<div class="content">
				<div class="item-content cf">
					<div class="material">
						<h2><?php echo $name; ?></h2>
						<p><?php echo $description; ?></p>
					</div>
					<div class="view">
						<a class="btn primary" target="_blank" href="<?php echo $link; ?>"> view</a>
					</div>		
				</div>					
			</div>
			<?php endwhile; ?>
		<?php endif; ?>		
		</div>
		
	</div>

				
					
</div> <!-- wrapper -->






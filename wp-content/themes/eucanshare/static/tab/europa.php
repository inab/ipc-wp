<div class="consortium-tab-list">
	
	<div class="breakpage special cf">
		<div class="wrapper cf">
			<h2 class="content">
				<span class="less-opacity">
					The euCanSHare project is implemented by a highly experienced consortium composed of <strong>16 institutions from Europe and Canada</strong>, with a unique track record in biomedical data management and ethics, as well as cardiovascular research and personalised medicine
				</span>
			</h2>  
		</div>
	</div>	
	
	
	
<?php if( have_rows('generate_partner_europe') ): ?>
	<?php while( have_rows('generate_partner_europe') ): the_row(); 

	// vars
		$image = get_sub_field('partner_logo');
		$partner = get_sub_field('partner');
		$country = get_sub_field('country');
		$flag = get_sub_field('flag');
		$contact = get_sub_field('contact');
		$content = get_sub_field('description');
		$mail = get_sub_field('mail');
		$link = get_sub_field('link');
		?>

<!----------------------
	ITEM 
----------------------->	
<div class="item cf">
	<div class="wrapper cf">
		<div class="logo-container">
				<a target="_blank" href="<?php echo $link; ?>">
					<div class="logo-consortium" style="background-image:url(<?php echo $image['url']; ?>);"></div>
				</a>
		</div>
		<div class="item-content">
			<div class="sub-title">
				<span class="item-title"><?php echo $partner; ?></span>
			</div>
			
			<div class="item-info cf">
				<div class="flag" style="background-image:url(<?php echo $flag['url']; ?>);"></div>
				
				<div class="item-country">
					<p class="country"><?php echo $country; ?></p>
				</div>
				
				<div class="contact">
					<p class="country"><a href="mailto:<?php echo $mail; ?>"> <?php echo $contact; ?> <i class="far fa-envelope"></i></a></p>
				</div>
				
			</div>
			
			<div class="description">
				<?php echo $content; ?>
			</div>
		</div>
	</div>
</div>

		
		
		<?php endwhile; ?>
<?php endif; ?>
		

	
	
</div>
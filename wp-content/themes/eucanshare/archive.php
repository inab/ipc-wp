<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fdg
 */

get_header();
?>


<div id="" class="">
		<div class="item-img cover cover-center primary-image flat-color"></div>
</div>

<section class="breakpage">
	
	<div class="wrapper cf">
		<?php if ( have_posts() ) : ?>

				<?php
				the_archive_title( '<h1 class="title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>

		<div class="grid">

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</div>

	</div>
</section>	


	
<?php
get_footer(); ?>

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
	<div class="item-img cover cover-center primary-image " style="height:50px;background-image:url(<?php echo  the_post_thumbnail_url('large');  ?>)"></div>

	<div class="wrapper overlap">
        <?php while ( have_posts() ) : the_post(); ?>
	<div class="content-overlap">
        <div style="margin-left:100px; margin-right:50px">
        <div class="wrapper ">
           <h2 class="section-title"><?php the_title();?></h2>
        </div>
        <div class="content" style="margin:20px 20px">
           <?php the_content(); ?>
	</div>
        </div> 
	</div>        
             
	<?php endwhile; ?>
</section>


<?php
get_footer();

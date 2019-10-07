<?php
/**
 * Template Name: page-anchor
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
 
get_header(); ?>


<div class="page-content ">
	


	<div class="scroll-content">
		
			<div id="anchor01">
				<?php get_template_part("static/WhyeuCanSHare"); ?>
			</div>
			<div id="anchor02">
				<?php get_template_part("static/Mission"); ?>
			</div>
		
			<div id="anchor03">
				<?php get_template_part("static/Implementation"); ?>
			</div>
			
			<div id="anchor04" >
				
				<?php get_template_part("static/pubblication-material"); ?>
				
				
			</div>
	</div>	


</div>


<?php get_footer(); ?>

 	
<script>
	

$(document).ready(function () {
      var Hheight = $("header").outerHeight();
      var HheightSubmenu = $(".sub-menu").outerHeight();
   // Add smooth scrolling to all links
  $(".scroll-link").on('click', function(e) {
  	$('.sub-menu li').removeClass('selected');
  	$(this).parent().addClass('selected');
  	
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
  
 
      e.preventDefault();
      // Store hash
      var hash = this.hash;
	  console.log(this.hash)
      
	  history.pushState(hash, null, hash);

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top - Hheight - HheightSubmenu
      }, 900, function(){
   	  	history.pushState(hash, null, hash);
      });
    } // End if

 });


    if(window.location.href.indexOf("#anchor01") > -1) {
	   hash = '#anchor01';
	   $('.sub-menu li').removeClass('selected');
	   $('.sub-menu li a[href="'+hash+'"]').addClass('selected');
      $('html, body').animate({
        scrollTop: $(hash).offset().top - Hheight - HheightSubmenu
      }, 900, );
	    
    }


    if(window.location.href.indexOf("#anchor02") > -1) {
	   hash = '#anchor02';
	   $('.sub-menu li').removeClass('selected');
	   $('.sub-menu li a[href="'+hash+'"]').addClass('selected');
      $('html, body').animate({
        scrollTop: $(hash).offset().top - Hheight - HheightSubmenu
      }, 900, );

    }

    if(window.location.href.indexOf("#anchor03") > -1) {
	   hash = '#anchor03';
	   $('.sub-menu li').removeClass('selected');
	   $('.sub-menu li a[href$="'+hash+'"]').parent().addClass('selected');
      $('html, body').animate({
        scrollTop: $(hash).offset().top - Hheight - HheightSubmenu
      }, 900, );
    }

    if(window.location.href.indexOf("#anchor04") > -1) {
	   hash = '#anchor04';
      $('html, body').animate({
        scrollTop: $(hash).offset().top - Hheight - HheightSubmenu
      }, 900, );
    }


	$('.accordion-head').on('click',function(e){
		if( $(this).parent().is('.active'))	{	
				$(this).parent().removeClass('active');
			} else {		
				$(this).parent().addClass('active'); 
			}

		
		e.stopPropagation();
		e.preventDefault();
	})

    
});
	    
</script>
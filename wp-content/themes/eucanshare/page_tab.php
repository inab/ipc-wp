<?php
/**
 * Template Name: page-tab
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
	


	<div class="tab">
		<div class="tab-header cf">
				<div class="wrapper cf">

					<div class="tab-btn data-tab-1 active" onclick="openTab(event, 'tab01')">
						<?php if(is_page('Platform')) { echo 'COHORTS'; } elseif(is_page('consortium')) {echo 'Europe'; } else { echo 'TAB 1';} ?>
					</div>
					<div class="tab-btn data-tab-2" onclick="openTab(event, 'tab02')">
						<?php if(is_page('Platform')) { echo 'STRUCTURE'; }  elseif(is_page('consortium')) {echo 'Canada'; } else { echo 'TAB 2';} ?>
					</div>
				</div>
		</div>

					<div id="tab01" class="tab-content active">
						<?php if(is_page('Platform')) { // se è pagina PLATFORM sezione COHORTS ?>
							<?php get_template_part("static/tab/cohorts_01"); ?>
						<?php } elseif(is_page('consortium')) { ?>
							<?php get_template_part("static/tab/europa"); ?>
						<?php } else { echo 'DEFAULT CONTENT 01';} ?>
					</div>

					<div id="tab02" class="tab-content">
						<?php if(is_page('Platform')) { // se è pagina PLATFORM sezione STRUCTURE ?>
							<?php get_template_part("static/tab/structure_02"); ?>

						
						<?php } elseif(is_page('consortium')) { ?>
							<?php get_template_part("static/tab/canada"); ?>
						

						<?php } else { echo 'DEFAULT CONTENT 02';} ?>
					</div>


	</div>
		


</div>


<?php get_footer(); ?>

 	
<script>
	
function openTab(evt, tabName) {
    var i, tabcontent, tabBtn;
    tabcontent = document.getElementsByClassName("tab-content");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].className = tabcontent[i].className.replace(" active", "");
    }
    tabBtn = document.getElementsByClassName("tab-btn");
    for (i = 0; i < tabBtn.length; i++) {
        tabBtn[i].className = tabBtn[i].className.replace(" active", "");
		// cambio la url con il nome del tab
    }
    document.getElementById(tabName).className += " active";
    evt.currentTarget.className += " active";
	history.pushState('', null, '#'+tabName);

}


$(document).ready(function () {

    if(window.location.href.indexOf("#tab01") > -1) {
       $('.tab-btn, .tab-content').removeClass('active')
       $('#tab01').addClass('active')
       $('.data-tab-1').addClass('active')
    }


    if(window.location.href.indexOf("#tab02") > -1) {
       $('.tab-btn, .tab-content').removeClass('active')
       $('#tab02').addClass('active')
       $('.data-tab-2').addClass('active')

    }



    if(window.location.href.indexOf("#tab03") > -1) {
       $('.tab-btn, .tab-content').removeClass('active')
       $('#tab03').addClass('active')
       $('.data-tab-3').addClass('active')
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
<?php
/**
 * Template Name: page-contact
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
	<div class="template-default contatti">
	
	<div class="tab">
		<div class="breakpage">
		<div class="wrapper cf">
				<div class="tab-header cf">
					<div class="tab-btn data-tab-1 active" onclick="openTab(event, 'contact')">CONTACT US</div>
					<div class="tab-btn data-tab-2" onclick="openTab(event, 'subscribe')">SUBSCRIBE TO OUR NEWSLETTER</div>
					<div class="tab-btn data-tab-3" onclick="openTab(event, 'join')">JOIN THE PLATFORM</div>
				</div>
		</div>
		</div>
		<div class="breakpage">
			<div class="wrapper cf">

					<!-- tab 01 - CONTACT US -->
					<div id="contact" class="tab-content active">
						<div class="split-content cf">
							<p>
							Got a question? Please fill out the form or email us at <strong><a href="mailto:info@eucanshare.eu">info@eucanshare.eu</a></strong>
							</p>
							
							<div id="form-contatti" class="content"><?php echo do_shortcode( '[contact-form-7 id="197" title="Contact-us"]' ); ?></div>
						</div>	
					</div>



					<!-- tab 02 - SUBSCRIBE TO OUR NEWSLETTE -->
					<div id="subscribe" class="tab-content">
						<div class="split-content cf">
							<p>
							Stay in touch with the project, receive regular news and stay updated on exciting events and initiatives.
							</p>
							
							<div class="content"><?php echo do_shortcode( '[contact-form-7 id="199" title="Subscribe"]' ); ?></div>
						</div>	
					</div>



					<!-- tab 03 - JOIN THE PLATFORM-->
					<div id="join" class="tab-content">
						<div class="split-content cf">
							<p>
							euCanSHare is creating a community of clinical researchers, data owners, innovators and entrepreneurs, as well as cardiovascular healthcare professionals focused on personalised medicine. <br><br> <strong class="blue">Join the community</strong> to increase the visibility and value of your data.
							</p>
							<div class="content"><?php echo do_shortcode( '[contact-form-7 id="198" title="Join"]' ); ?></div>
						</div>	
					</div>
			</div>
		</div>
	</div>
		

</div> <!-- template-default contatti -->
</div><!--  page content -->	


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
    }
    document.getElementById(tabName).className += " active";
    evt.currentTarget.className += " active";
	history.pushState('', null, '#'+tabName);
   
}


$(document).ready(function () {

    if(window.location.href.indexOf("contact") > -1) {
       $('.tab-btn, .tab-content').removeClass('active')
       $('#contact').addClass('active')
       $('.data-tab-1').addClass('active')
    }


    if(window.location.href.indexOf("subscribe") > -1) {
       $('.tab-btn, .tab-content').removeClass('active')
       $('#subscribe').addClass('active')
       $('.data-tab-2').addClass('active')
    }



    if(window.location.href.indexOf("join") > -1) {
       $('.tab-btn, .tab-content').removeClass('active')
       $('#join').addClass('active')
       $('.data-tab-3').addClass('active')
    }

    
});
	    
</script>


$( document ).ready(function() {

    console.log( "ready!" );

	var clicked = false;


// MENU
	$('#menu').on('click',function(e){
		$('body').toggleClass('menu-open');
		if(clicked == false) {
			clicked = true;
			TweenMax.set("#site-navigation a", {opacity:0,x:-30})
			TweenMax.staggerFromTo("#site-navigation a", 0.1, 
				{ opacity:0, x:-30, force3D:true}, 
				{ opacity:1, x:0, force3D:true, ease: Power2.easeInOut , delay:0.2 },0.05 , allDone);
				function allDone() {
	 				TweenMax.set("#site-navigation a", {clearProps:"all"});
				}				
			} else {
				clicked = false;
			}
				e.stopPropagation();


		e.preventDefault();
		return false;

});

// SWIPER HOME SLIDER

	var swiperHome = new Swiper('.swiper-container.s-home-full', {
	  parallax: true,
	  speed: 900,	
      pagination: {
        el: '.s-home-full .swiper-pagination',
        dynamicBullets: true,
        clickable:true,        
      },
     	 navigation: {
        	nextEl: '.s-home-full  .swiper-button-next',
		},
	  autoplay: {
	    delay: 9000,
	    stopOnLastSlide: true,
	    disableOnInteraction: false,
	  },
	  keyboard: {
	  	enabled: true,
      },
	  

 
    }); 


// SWIPER HOME SLIDER mobile

	var swiperHomeMobile = new Swiper('.swiper-container.s-home-full-mobile', {
	  speed: 900,	
      pagination: {
        el: '.s-home-full-mobile .swiper-pagination',
        dynamicBullets: true,
        clickable:true,        
      },
     	 navigation: {
        	nextEl: '.s-home-full-mobile  .swiper-button-next',
		},
	  autoplay: {
	    delay: 9000,
	    stopOnLastSlide: true,
	    disableOnInteraction: false,
	  },
    }); 


// SWIPER NEWS HOME


	var swiperNews = new Swiper('.swiper-container.s-news', {
	      	slidesPerView: 'auto',
		  	spaceBetween: 30,
		  	freeMode: true,
		  	navigation: {
	        	nextEl: '.s-news  .swiper-button-next',
				prevEl: '.s-news  .swiper-button-prev',
			},
    }); 


// SWIPER Twitter 


var swiperTwitter = new Swiper('.swiper-container.s-twitter', {
		  	spaceBetween: 20,
		  	slidesPerView: 'auto',
		  	direction: 'vertical',
		  	loop: true,
		  	speed: 900,
		  	
		  	autoplay: {
		        delay: 5000,
		        disableOnInteraction: false,
		    },
		    
		    breakpoints: {
		        959: {
		          direction: 'horizontal',
		        },
		        768: {
		          direction: 'horizontal',
		        },
		        640: {
		          direction: 'horizontal',
		        },
		        320: {
		         direction: 'horizontal',
		        }
		    }
}); 


// SWIPER CONSORTIUM HOME

	var swiperClienti = new Swiper('.swiper-container.s-consortium', {
	      	slidesPerView: '5',
		  	spaceBetween: 60,
		  	freeMode: true,
		  	loop: true,
		  	freeModeFluid: true,
		  	
		  	autoplay: {
		        delay: 2500,
		        disableOnInteraction: false,
		    },
		     
			breakpoints: {
	
		        1170: {
		          slidesPerView: 4,
		          spaceBetween: 60,
		        },
		        960: {
		          slidesPerView: 3.4,
		          spaceBetween: 30,
		        },
		        768: {
		          slidesPerView: 2.8,
		          spaceBetween: 30,
		        },
		        640: {
		          slidesPerView: 2.6,
		          spaceBetween: 20,
		        },
		        320: {
		          slidesPerView: 2,
		          spaceBetween: 10,
		        }
		    }
    });     
    
// SWIPER RSS

	var swiperRss = new Swiper('.swiper-container.s-rss', {
	      	slidesPerView: 1,
		  	spaceBetween: 60,
			    speed: 4500,
			    loop: true,
		  	
			  autoplay: {
			    delay:5000,
			  },	
			  
			  breakpoints: {
				568: {
		          speed: 900,
		          autoplay: {delay: 2500,},
		        }	
			  }
			  
			  	  	

          });     
    

// SWIPER PLATFORM MAP

     swiperMap = new Swiper('.swiper-container.s-map', {
      zoom: true,
      toggle:true
    });
    
	$('.zoomIn').on('click',function(e){
		swiperMap.zoom.in();
	});
	$('.zoomOut').on('click',function(e){
			swiperMap.zoom.out();
		});


    
    

var gallery = document.getElementById("gallery");
	if(gallery) {
	    $(gallery).lightGallery({
	        selector: '.full-screen',
	        thumbnail: false,
	        vimeoPlayerParams: {
	        byline : 0,
			portrait : 0,
		    }
	    });	
	}	
        
    }); 


var galleryContent = document.getElementById("gallerycontent");
	if(galleryContent) {
	    $(galleryContent).lightGallery({
	        selector: '.full-screen',
	        thumbnail: false,
	        vimeoPlayerParams: {
	        byline : 0,
			portrait : 0,
		    }
	    });	
	}	


 

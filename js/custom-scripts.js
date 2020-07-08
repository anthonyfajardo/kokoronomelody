
( function( $ ) {

	console.log('custom scripts loading!');


	// HAMBURGER MENU 
	$(document).ready(function(){
		$(".hamburger").click(function(){
			$(this).toggleClass('open');
			$(".menu-primary-container").toggleClass('show');
		});
	});

	$(document).scroll(function(){
		var $nav = $("#masthead");
		$nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
	});


	$(function(){
		$('.testimonial-container').flickity({
			cellAlign: 'left',
			contain: true,
			wrapAround: true,
			adaptiveHeight: true,
			pageDots: false
		});

		$('.gallery-wrapper').flickity({
			cellAlign: 'left',
			contain: true,
			wrapAround: true,
			pageDots: false
		});
	});

	$(document).ready(function(){
		var navHeight = $("#masthead").height();
			navHeight = navHeight + 50;
		$(".blog-page").css("margin-top", navHeight);
		$("#secondary").css("margin-top", navHeight);
		$(".single-blog").css("margin-top", navHeight);
		$(".links-wrapper").css("padding-top", navHeight);


		var mediaQuery = window.matchMedia("(min-width: 1024px)");

		if(mediaQuery.matches){
			$(".contact-content").css({
				"margin-top" : navHeight - 35,
				"max-height" : "86vh",
				"overflow-y" : "scroll"
			});
			
		}

	});


	$(document).ready(function(){

		var hasBGImage = document.getElementById('headerImage');

		if(hasBGImage){
			console.log('HAS BG IMAGE');
		}else{
			console.log('NO IMAGE');
			$('#site-navigation').addClass('blog-nav');
		}


	});

} )( jQuery );

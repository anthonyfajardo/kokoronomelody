
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
			wrapAround: true
		});

		$('.gallery-wrapper').flickity({
			cellAlign: 'left',
			contain: true,
			wrapAround: true
		});
	});

	$(document).ready(function(){
		var navHeight = $("#masthead").height();
			navHeight = navHeight + 50;
		$(".blog-page").css("margin-top", navHeight);
		$("#secondary").css("margin-top", navHeight);
		$(".single-blog").css("margin-top", navHeight);
	});

	$(function(){

	})

} )( jQuery );

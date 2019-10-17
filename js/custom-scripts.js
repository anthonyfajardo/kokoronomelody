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


	// $(document).ready(function(){
	// 	var zero = 0;
		
	// 	$(window).scroll(function(){
	// 		$('#masthead').toggleClass('hide', $(window).scrollTop() > zero);


	// 		zero = $(window).scrollTop();


	// 	})
	// });

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

} )( jQuery );


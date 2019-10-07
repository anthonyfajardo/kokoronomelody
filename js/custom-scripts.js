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

} )( jQuery );


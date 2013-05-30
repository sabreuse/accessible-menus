jQuery(document).ready(function($) {
	$('#site-navigation li').hover(
		function(){$(this).addClass("hover");},
		function(){$(this).delay('250').removeClass("hover");}
	);
	$('#site-navigation li a').on('focus',
		function(){$(this).parents().addClass("hover");}
	);
	$('#site-navigation li a').on('blur',
		function(){$(this).parents().removeClass("hover");}
	);
});
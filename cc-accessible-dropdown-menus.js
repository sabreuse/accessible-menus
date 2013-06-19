(function($) {
	$('[role=navigation] li').hover(
		function(){$(this).addClass("ccadm-hover");},
		function(){$(this).delay('250').removeClass("ccadm-hover");}
	);
	$('[role=navigation] li a').on('focus blur',
		function(){$(this).parents().toggleClass("ccadm-hover");}
	);
}(jQuery));

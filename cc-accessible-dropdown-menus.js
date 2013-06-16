(function($) {

	function is_touch_device() {
		return !!('ontouchstart' in window) || !!('onmsgesturechange' in window); // works on ie10
	}

	if (!is_touch_device()) {
		$('[role=navigation] li').hover(
			function(){$(this).addClass("ccadm-hover");},
			function(){$(this).delay('250').removeClass("ccadm-hover");}
		);
		$('[role=navigation] li a').on('focus blur',
			function(){$(this).parents().toggleClass("ccadm-hover");}
		);
	}
}(jQuery));

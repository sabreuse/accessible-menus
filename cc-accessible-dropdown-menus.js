jQuery(document).ready(function($) {

	function is_touch_device() {
		return !!('ontouchstart' in window) || !!('onmsgesturechange' in window); // works on ie10
	}

	if (!is_touch_device()) {
		$('#site-navigation li').hover(
			function(){$(this).addClass("hover");},
			function(){$(this).delay('400').removeClass("hover");}
		);
		$('#site-navigation li a').on('focus',
			function(){$(this).parents().addClass("hover");}
		);
		$('#site-navigation li a').on('blur',
			function(){$(this).parents().removeClass("hover");}
		);
	}
});

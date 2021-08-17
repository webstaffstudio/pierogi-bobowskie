// import external dependencies

import "jquery"

// Import everything from autoload
import "./autoload/**/*"
jQuery(document).ready(() => {
	$('.hamburger-wrapper.open-menu').on('click', function() {
		$('.mobile-menu').toggleClass('active');
	})
	$('.hamburger-wrapper.close-menu').on('click', function() {
		$('.mobile-menu').removeClass('active');
	})
});

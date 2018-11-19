(function (window) {
	'use strict';

	function $(id) {

		$(document).ready(function(){
			$('button').click(function(){
				$('a').hide();
			});
		});
	}

	// Export to window
	window.app = window.app || {};
	window.app.$ = $;
})(window);

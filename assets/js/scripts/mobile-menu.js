/**
 * scripts for the simple mobile menu (replacing for the homepage drawer because, lazy
 */

jQuery(document).ready( function($) {
	$('#drawer_open_close_button').click( function() {
		$("#intro_content").toggleClass("closed");
	});
});
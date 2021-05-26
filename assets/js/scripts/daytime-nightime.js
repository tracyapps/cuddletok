jQuery(document).ready( function($) {
	var night = document.getElementById("night");
	var day = document.getElementById("day");

	$("#toggle--daynight").on("click", function () {
		if ($(this).prop("checked")) {
			day.play();
			$("body").removeClass("night");
		} else {
			night.play();
			$("body").addClass("night");
		}
	});

});
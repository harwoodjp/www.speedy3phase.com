$(document).ready(function(){

	var log_progress_items = $("#log_results .progress_");

	for (var i = 0; i < log_progress_items.length; i++) {
		if ($(log_progress_items[i]).text().includes("Completed")) {
			$(log_progress_items[i]).css("color","green");
		}
		else if ($(log_progress_items[i]).text().includes("In Progress")) {
		}
	}
});

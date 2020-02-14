$(document).ready( function () {

	scaleLayer($('#main_bg'), 3000, 1);

	scaleLayer($('#l01'), 3000, 5);
	scaleElement($('#next'), 341, 2900, 36);
	
	//$.jInvertScroll(['.scroll']);
	$.jInvertScroll(['.scroll'], {
		width: 'auto',  // Page width (auto or int value)
		height: 'auto', // Page height (the shorter, the faster the scroll)
		onScroll: function(percent) {
		    // Callback function that will be called each time the user
		    // scrolls up or down, useful for animating other parts
		    // on the page depending on how far the user has scrolled down
		    // values go from 0.0 to 1.0 (with 4 decimals precision)
		}
		});
	$("body").css("overflow-y", "hidden");
});

$(window).load(function() {
	$("#loader").fadeOut("fast");
    $("body").css("overflow-y", "scroll");
});

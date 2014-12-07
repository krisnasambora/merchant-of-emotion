$(document).ready( function () {
	$.jInvertScroll(['.scroll']);
	$("body").css("overflow-y", "hidden");
});

$(window).load(function() {
    $("body").css("overflow-y", "scroll");
});

$(document).ready( function () {
	$.jInvertScroll(['.scroll']);
	$("body").css("overflow-y", "hidden");

	function anim(){
		$("#lights img").animate({
			opacity : 0.2
		}, 1000).animate({
			opacity : 1
		},1000, anim);
	}

	anim();
});

$(window).load(function() {
    $("#loader").fadeOut("fast");
    $("body").css("overflow-y", "scroll");
});
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
    $("#element-01 img").attr("src","http://merchantofemotion.com/images/sunset/the-beginning-of-sunset-deity-01/1.gif");
    $("#loader").fadeOut("fast");
    $("body").css("overflow-y", "scroll");
});
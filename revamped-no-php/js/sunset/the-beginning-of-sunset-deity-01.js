$(document).ready( function () {

	scaleLayer($('#main_bg'), 2509, 1);

	scaleLayer($('#l01'), 3200, 250);
	scaleElement($('#l01 > #element-02'), -130, 1175, 800);
	scaleElement($('#l01 > #element-03'), 220, 1420, 210);

	scaleLayer($('#l02'), 6500, 500);
	scaleElement($('#l02 > #element-01'), -50, 510, 458);
	scaleElement($('#l02 > #element-04'), 75, 3500, 563);
	scaleElement($('#l02 > #element-05'), 310, 5440, 82);
	scaleElement($('#l02 > #element-06'), 335, 6360, 36);


	$.jInvertScroll(['.scroll']);
	$("body").css("overflow-y", "hidden");

	function anim(){
		$("#l01 img").animate({
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
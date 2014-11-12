$(function(){
	$.jInvertScroll(['.scroll']);
});

$(document).ready( function () {
	function anim(){
		$("#lights img").animate({
			opacity : 0.2
		}, 1000).animate({
			opacity : 1
		},1000, anim);
	}

	anim();
});



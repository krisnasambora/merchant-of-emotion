$(function(){
	$.jInvertScroll(['.scroll']);
	//anim();
	//$('#horizon-scroll').css('top', screen.height/2 - $('#horizon-scroll').height()/2 + 'px');
	
	/*$('#front-scroll').css('width', screen.width*3 +'px');
	$('#horizon-scroll').css('width', screen.width*3 +'px');
	$('#horizon-scroll img').css('width', screen.width*3 +'px');
	$('#horizon-scroll img').css('height', '400px');

	$('#description').css('margin-top', screen.height/2.75 - $('#description').height() +'px');
	$('#description').css('margin-left', screen.width/2 - $('#description').width() +'px');
	$('#description').css('height', (screen.height*0.5) +'px');
	$('#description').css('width', (screen.width*0.5) +'px');

	$('#excerpt').css('margin-top', screen.height/2.75 - $('#excerpt').height() +'px');
	$('#excerpt').css('margin-left', (screen.width/2 + screen.width) - $('#excerpt').width()/1.7 +'px');
	$('#tickets').css('margin-top', screen.height/2.75 - $('#tickets').height() +'px');
	$('#tickets').css('margin-left', (screen.width/2 + (screen.width*2)) - $('#tickets').width()/1.7 +'px');*/
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



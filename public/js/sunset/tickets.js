$(function(){
	$.jInvertScroll(['.scroll']);
	$('#front-scroll').css('width', screen.width*3 +'px');
	$('#description').css('margin-top', screen.height/2.75 - $('#description').height() +'px');
	$('#description').css('margin-left', screen.width/2 - $('#description').width()/1.6 +'px');
	$('#excerpt').css('margin-top', screen.height/2.75 - $('#excerpt').height() +'px');
	$('#excerpt').css('margin-left', (screen.width/2 + screen.width) - $('#excerpt').width()/1.7 +'px');
	$('#tickets').css('margin-top', screen.height/2.75 - $('#tickets').height() +'px');
	$('#tickets').css('margin-left', (screen.width/2 + (screen.width*2)) - $('#tickets').width()/1.7 +'px');
});


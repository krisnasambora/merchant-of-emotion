$(function(){
	
});

$(document).ready( function () {
	count();
});

function count(){
	var chapter2 = new Date();
	chapter2 = new Date('2014-11-28');
	$('#timer').countdown({until: chapter2, format: 'DHM'});
}
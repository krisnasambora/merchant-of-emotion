var currentText = 1;

$(function(){
	$('#story').css('margin-top', screen.height/2.5 - $('#story').height() +'px');
	$('#hashtag').css('margin-top', screen.height/3 - $('#hashtag').height() +'px');
	$(".narration").hide();
	render(currentText);
});

function render(num) {
	switch(num){
		case 1:
			$(".narration").hide();
			$(".narration:nth-child(1)").fadeIn( "slow", function() {
				// Animation complete
			});
			conf(num);
			break;
		case 2:
			$(".narration").hide();
			$(".narration:nth-child(2)").fadeIn( "slow", function() {
				// Animation complete
			});
			conf(num);
			break;
	}
}

function conf(num){
	switch(num){
		case 1:
			$("#get-prev").hide();
			$("#get-next").show();
			break;
		case 2:
			$("#get-prev").show();
			$("#get-next").hide();
			break;
	}
}

$(document).ready( function () {
	$("#get-next").click(function(){
		currentText += 1;
		render(currentText);
	});
	$("#get-prev").click(function(){
		currentText -= 1;
		render(currentText);
	});
});


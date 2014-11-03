var currentText = 1;

$(function(){
	$(".narration").hide();
	render(currentText);
});

function render(num) {
	switch(num){
		case 1:
			$(".narration").hide();
			$(".narration:nth-child(1)").show();
			break;
		case 2:
			$(".narration").hide();
			$(".narration:nth-child(2)").show();
			break;
	}
}

$(document).ready( function () {
	$("#get-next").click(function(){
		if(currentText < 2){
			currentText += 1;
			render(currentText);
		}
	});
	$("#get-prev").click(function(){
		if(currentText > 1){
			currentText -= 1;
			render(currentText);
		}
	});
});


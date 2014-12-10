var reference = 768;
var height = 768;

$(document).ready(function(){
	height = screen.height;
});

function getDip(px) {
	return Math.ceil(px * height / reference);
}

function scaleLayer (object, width, zIndex) {
	object.css({'width':getDip(width) + 'px', 'z-index':getDip(zIndex)});
	return object;
}

function scaleElement (object, top, left, height) {
	object.css({'top':getDip(top) + 'px', 'left':getDip(left) + 'px'});
	object.find('img').css({'height':getDip(height) + 'px'});
	return object;
}
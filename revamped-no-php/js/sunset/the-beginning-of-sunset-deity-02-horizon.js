$(document).ready( function () {

	scaleLayer($('#main_bg'), 2304, 1);

	scaleLayer($('#l01'), 2304, 500);
	scaleElement($('#l01 > #teks-a'), 200, 145, 24);
	scaleElement($('#l01 > #teks-b'), 0, 460, 450);
	scaleElement($('#l01 > #teks-c'), 500, 1780, 49);
	scaleElement($('#l01 > #next'), 350, 2220, 34);
	scaleElement($('#l01 > #back'), 350, 10, 34);

	scaleLayer($('#l02'), 3000, 505);
	scaleElement($('#l02 > #coboru'), 649, 1780, 118);
	
	//$.jInvertScroll(['.scroll']);
	$.jInvertScroll(['.scroll'], {
		width: 'auto',  // Page width (auto or int value)
		height: 'auto', // Page height (the shorter, the faster the scroll)
		onScroll: function(percent) {
		    // Callback function that will be called each time the user
		    // scrolls up or down, useful for animating other parts
		    // on the page depending on how far the user has scrolled down
		    // values go from 0.0 to 1.0 (with 4 decimals precision)
		}
		});
	$("body").css("overflow-y", "hidden");
});

$(window).load(function() {
    
    var preload = [$('#main_bg > img')]; //array of object yg mau diload sebelum page bisa dibaca

	var postload = [
					$('#l01 > #teks-a > img'),
					$('#l01 > #teks-b > img'),
					$('#l01 > #teks-c > img'),
					$('#l01 > #back > img'),
					$('#l01 > #next > img'),
					$('#l02 > #coboru > img')]; //array of object yg mau diload setelah page bisa dibaca

	function afterPreload() { //callback, fungsi dipanggil setelah preload beres
		$('#loader').hide();
		priorityLoad(postload, null); //postload, loading asset setelah page bisa dibaca
		$("#loader").fadeOut("slow");
    	$("body").css("overflow-y", "scroll");
    	
	}

	priorityLoad(preload, afterPreload); //preload, loading asset sebelum page bisa dibaca
});

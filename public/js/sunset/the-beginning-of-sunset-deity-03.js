$(document).ready( function () {
	
	scaleLayer($('#main_bg'), 12000, 1);

	scaleLayer($('#l01'), 30000, 500);
	scaleElement($('#2-NB'), 583, 2500, 184);

	scaleLayer($('#l02'), 12000, 10);
	scaleElement($('#text-01'), 470, 195, 15);
	scaleElement($('#text-02'), 330, 830, 65);

	scaleLayer($('#l03'), 14000, 5);
	scaleElement($('#2-siluet-kecil'), 583, 2100, 184);

	scaleLayer($('#l04'), 12000, 5);
	scaleElement($('#3-aurora'), 0, 2250, 622);

	scaleLayer($('#l05'), 34500, 500);
	scaleElement($('#text-03'), 240, 5000, 138);
	scaleElement($('#text-04'), 80, 6870, 375);
	scaleElement($('#text-05'), 170, 8670, 260);
	scaleElement($('#text-06'), 320, 10300, 21);
	scaleElement($('#text-07'), 350, 12000, 76);

	scaleLayer($('#l06'), 18500, 10);
	scaleElement($('#1-siluet-1'), 440, 3500, 394);
	scaleElement($('#1-siluet-2'), 440, 4500, 389);
	scaleElement($('#1-siluet-3'), 440, 5500, 330);

	scaleLayer($('#l07'), 20000, 10);
	scaleElement($('#1-siluet-4'), 440, 6750, 375);

	scaleLayer($('#l08'), 12000, 15);
	scaleElement($('#petal_2'), 0, 2500, 768);

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
    var preload = [$('#main_bg > img'),
    			   $('#l01 > #2-NB > img'),
    			   $('#l02 > #text-01 > img'),
    			   $('#l02 > #text-02 > img'),
    			   $('#l03 > #2-siluet-kecil > img'),
    			   $('#l04 > #3-aurora > img'),
    			   $('#l05 > #text-03 > img'),
    			   $('#l05 > #text-04 > img'),
    			   $('#l05 > #text-05 > img'),
    			   $('#l05 > #text-06 > img'),
    			   $('#l05 > #text-07 > img'),
    			   $('#l06 > #1-siluet-1 > img'),
    			   $('#l06 > #1-siluet-2 > img'),
    			   $('#l06 > #1-siluet-3 > img'),
    			   $('#l07 > #1-siluet-4 > img'),
    			   $('#l08 > #petal_2 > img')]; //array of object yg mau diload sebelum page bisa dibaca

	var postload = []; //array of object yg mau diload setelah page bisa dibaca

	function afterPreload() { //callback, fungsi dipanggil setelah preload beres
		$('#loader').hide();
		priorityLoad(postload, null); //postload, loading asset setelah page bisa dibaca
		$("#loader").fadeOut("slow");
    	$("body").css("overflow-y", "scroll");
	}

	priorityLoad(preload, afterPreload); //preload, loading asset sebelum page bisa dibaca
});

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
	scaleElement($('#1-siluet-1'), 440, 3400, 394);
	scaleElement($('#1-siluet-2'), 440, 4350, 389);
	scaleElement($('#1-siluet-3'), 440, 5300, 330);

	scaleLayer($('#l07'), 20000, 10);
	scaleElement($('#1-siluet-4'), 440, 6550, 375);

	scaleLayer($('#l08'), 12000, 15);
	scaleElement($('#petal_2'), 0, 2500, 768);

	scaleLayer($('#l09'), 13000, 5);
	scaleElement($('#mata-2-a'), 660, 9500, 51);
	scaleElement($('#mata-3-b'), 200, 9600, 85);
	scaleElement($('#mata-2-d'), 70, 9720, 51);
	scaleElement($('#mata-3-e'), 450, 10030, 85);
	scaleElement($('#mata-2-f'), 630, 10050, 51);
	scaleElement($('#mata-3-f'), 210, 10450, 85);

	scaleLayer($('#l10'), 14000, 5);
	scaleElement($('#mata-2-b'), 350, 10300, 51);

	scaleLayer($('#l12'), 12000, 5);
	scaleElement($('#mata-3-a'), 420, 8820, 85);
	scaleElement($('#mata-1-a'), 120, 8980, 124);
	scaleElement($('#mata-2-e'), 350, 9000, 75);
	scaleElement($('#mata-1-b'), 500, 8950, 124);
	scaleElement($('#mata-3-c'), 250, 9150, 85);
	scaleElement($('#mata-3-d'), 10, 9060, 85);
	scaleElement($('#mata-1-c'), 70, 9270, 124);
	scaleElement($('#mata-1-d'), 290, 9350, 124);
	scaleElement($('#mata-2-g'), 590, 9400, 75);
	scaleElement($('#mata-2-h'), 40, 9640, 51);
	scaleElement($('#mata-2-i'), 430, 9570, 51);
	scaleElement($('#mata-2-j'), 350, 9800, 51);
	scaleElement($('#mata-2-k'), 650, 9700, 51);
	scaleElement($('#mata-2-c'), 150, 8730, 51);

	scaleLayer($('#l13'), 14000, 10);
	scaleElement($('#kelabang'), 0, 11410, 780);

	scaleLayer($('#l14'), 16000, 5);
	scaleElement($('#monsters'), 99, 13310, 668);

	scaleLayer($('#l15'), 12000, 15);
	scaleElement($('#NB'), 680, 10605, 78);

	scaleLayer($('#l16'), 12000, 15);
	scaleElement($('#moon'), 50, 10390, 534);

	scaleLayer($('#l17'), 12000, 15);
	scaleElement($('#back'), 350, 25, 34);
	scaleElement($('#next'), 350, 11900, 34);

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

	function anim(){
		$("#l15 img").animate({
			opacity : 0.4
		}, 1000).animate({
			opacity : 1
		},1000, anim);
	}

	anim();
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
    			   $('#l08 > #petal_2 > img'),
    			   $('#l09 > #mata-2-a > img'),
    			   $('#l09 > #mata-3-b > img'),
    			   $('#l09 > #mata-2-d > img'),
    			   $('#l09 > #mata-3-e > img'),
    			   $('#l09 > #mata-2-f > img'),
    			   $('#l09 > #mata-3-f > img'),
    			   $('#l10 > #mata-2-b > img'),
    			   $('#l12 > #mata-3-a > img'),
    			   $('#l12 > #mata-1-a > img'),
    			   $('#l12 > #mata-2-e > img'),
    			   $('#l12 > #mata-1-b > img'),
    			   $('#l12 > #mata-3-c > img'),
    			   $('#l12 > #mata-3-d > img'),
    			   $('#l12 > #mata-1-c > img'),
    			   $('#l12 > #mata-1-d > img'),
    			   $('#l12 > #mata-2-g > img'),
    			   $('#l12 > #mata-2-h > img'),
    			   $('#l12 > #mata-2-i > img'),
    			   $('#l12 > #mata-2-j > img'),
    			   $('#l12 > #mata-2-k > img'),
				   $('#l12 > #mata-2-c > img'),
				   $('#l13 > #kelabang > img'),
				   $('#l14 > #monsters > img'),
				   $('#l15 > #NB > img'),
				   $('#l16 > #moon > img'),
				   $('#l17 > #back > img'),
				   $('#l17 > #next > img')]; //array of object yg mau diload sebelum page bisa dibaca

	var postload = []; //array of object yg mau diload setelah page bisa dibaca

	function afterPreload() { //callback, fungsi dipanggil setelah preload beres
		$('#loader').hide();
		priorityLoad(postload, null); //postload, loading asset setelah page bisa dibaca
		$("#loader").fadeOut("slow");
    	$("body").css("overflow-y", "scroll");
	}

	priorityLoad(preload, afterPreload); //preload, loading asset sebelum page bisa dibaca
});

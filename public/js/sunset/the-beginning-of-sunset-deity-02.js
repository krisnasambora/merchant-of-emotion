$(document).ready( function () {

	scaleLayer($('#main_bg'), 17967, 1);

	scaleLayer($('#l01'), 100000, 500);
	scaleElement($('#s1_a'), 398, 599, 233);
	scaleElement($('#s1_b'), -39, 1530, 768);
	scaleElement($('#s1_boy'), 499, 1890, 128);
	scaleElement($('#s1_c'), 0, 2590, 768);
	scaleElement($('#s1_d1'), 222, 4240, 368);
	scaleElement($('#s1_d2'), 189, 4748, 458);
	scaleElement($('#s1_d3'), 315, 7195, 184);
	scaleElement($('#s2_a'), 0, 24695, 768);
	scaleElement($('#s2_c1'), 151, 26749, 615);
	scaleElement($('#s2_c3'), 356, 27760, 410);
	scaleElement($('#s2_c6'), 230, 29419, 344);
	scaleElement($('#s2_d'), 363, 31709, 405);
	scaleElement($('#s2_e1'), 624, 33209, 143);
	scaleElement($('#s2_e2'), 0, 35380, 768);
	scaleElement($('#s3_b'), 274, 70529, 492);
	scaleElement($('#s3_teks-a'), -95, 63250, 768);

	scaleLayer($('#l02'), 110000, 495);
	scaleElement($('#l02 > #s2_sun'), 392, 27779, 374);
	scaleElement($('#l02 > #s2_pohon-a'), 0, 30120, 768);
	scaleElement($('#l02 > #s2_pohon-b'), 580, 29760, 160);
	scaleElement($('#l02 > #s2_pohon-c'), 240, 30950, 430);
	scaleElement($('#l02 > #s2_pohon-d'), 20, 31350, 614);
	scaleElement($('#l02 > #s2_pohon-e'), 160, 32270, 558);
	scaleElement($('#l02 > #s2_pohon-f'), 10, 32600, 758);
	scaleElement($('#l02 > #s2_pohon-g'), 670, 29260, 52);
	scaleElement($('#l02 > #s2_tanah'), 568, 30150, 198);
	scaleElement($('#l02 > #s2_semak'), 330, 31960, 437);
	scaleElement($('#l02 > #s2_batu-a'), 0, 36659, 768);
	scaleElement($('#l02 > #s2_batu-b'), 0, 37970, 768);
	scaleElement($('#l02 > #s2_batu-c'), 0, 38740, 768);
	scaleElement($('#l02 > #s2_teks-a'), 0, 34580, 768);

	scaleLayer($('#l03'), 113000, 505);
	scaleElement($('#l03 > #s2_pohon-a'), 0, 34000, 768);
	scaleElement($('#l03 > #s2_pohon-b'), 0, 32310, 768);
	scaleElement($('#l03 > #s2_batu-a'), 0, 38089, 768);
	scaleElement($('#l03 > #s2_teks-a'), 200, 32320, 314);

	scaleLayer($('#l04'), 17967, 480);
	scaleElement($('#l04 > #s2_awan-a'), 0, 4200, 600);

	scaleLayer($('#l05'), 21000, 485);
	scaleElement($('#l05 > #s2_awan-a'), 394, 4990, 294);

	scaleLayer($('#l06'), 20000, 490);
	scaleElement($('#l06 > #s2_awan-a'), 89, 4790, 608);

	scaleLayer($('#l07'), 123000, 495);
	scaleElement($('#l07 > #s2_pohon-a'), 210, 37000, 558);
	scaleElement($('#l07 > #s2_pohon-b'), 161, 37500, 696);
	scaleElement($('#l07 > #s2_batu-a'), 247, 42100, 504);
	scaleElement($('#l07 > #s2_batu-b'), 0, 42880, 768);
	scaleElement($('#l07 > #s2_teks-a'), 0, 32090, 768);

	scaleLayer($('#l08'), 19500, 2);
	scaleElement($('#l08 > #s3_awan-a'), 103, 12050, 663);

	scaleLayer($('#l09'), 23000, 2);
	scaleElement($('#l09 > #s3_awan-a'), 0, 14740, 768);
	scaleElement($('#l09 > #s3_a1'), 100, 11500, 279);
	scaleElement($('#l09 > #s3_a2'), 553, 12000, 184);
	scaleElement($('#l09 > #s3_a3'), 250, 12500, 276);

	scaleLayer($('#l10'), 21000, 2);
	scaleElement($('#l10 > #s3_awan-a'), 0, 13750, 627);

	scaleLayer($('#l11'), 20000, 4);
	scaleElement($('#l11 > #s3_awan-a'), 0, 13750, 768);

	scaleLayer($('#l12'), 17967, 5);
	scaleElement($('#l12 > #transition-bg1'), 0, 3858, 768);
	scaleElement($('#l12 > #transition-bg2'), -60, 10620, 596);
	scaleElement($('#l12 > #transition-bg3'), 129, 10580, 637);
	scaleElement($('#l12 > #transition-bg4'), 0, 12625, 768);
	scaleElement($('#l12 > #sun'), 0, 11555, 768);
	scaleElement($('#l12 > #shirt'), 165, 8567, 474);

	scaleLayer($('#l13'), 21000, 5);
	scaleElement($('#l13 > #transition-bg5'), 0, 16100, 768);

	scaleLayer($('#l14'), 18700, 6);
	scaleElement($('#l14 > #arms'), 30, 8900, 737);

	scaleLayer($('#l15'), 19000, 7);
	scaleElement($('#l15 > #head'), 175, 9020, 445);
	
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
    $("body").css("overflow-y", "scroll");
});

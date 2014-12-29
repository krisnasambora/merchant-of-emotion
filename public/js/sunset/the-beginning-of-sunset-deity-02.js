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
	scaleElement($('#s2_e3'), 0, 34270, 370);
	scaleElement($('#s2_e4'), 340, 35100, 284);
	scaleElement($('#s3_b'), 274, 70529, 492);
	scaleElement($('#s3_teks-a'), -95, 63250, 768);
	scaleElement($('#next'), 350, 99910, 34);

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

	scaleLayer($('#l11'), 20000, 6);
	scaleElement($('#l11 > #s3_awan-a'), 0, 13750, 768);

	scaleLayer($('#l12'), 17967, 5);
	scaleElement($('#l12 > #transition-bg1'), 0, 3858, 768);
	scaleElement($('#l12 > #transition-bg2'), -60, 10620, 596);
	scaleElement($('#l12 > #transition-bg3'), 129, 10580, 637);
	scaleElement($('#l12 > #transition-bg4'), 0, 12625, 768);
	scaleElement($('#l12 > #sun'), 0, 11555, 768);
	scaleElement($('#l12 > #shirt'), 165, 8567, 474);
	scaleElement($('#l12 > #kipas'), 165, 8850, 466);

	scaleLayer($('#l13'), 21000, 7);
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
    

    var preload = [$('#main_bg > img'), 
    			   $('#l01 > #s1_a > img'),
    			   $('#l01 > #s1_b > img'), 
    			   $('#l01 > #s1_boy > img'), 
    			   $('#l01 > #s1_c > img'),
    			   $('#l01 > #s1_d1 > img'), 
    			   $('#l01 > #s1_d2 > img'),
    			   $('#l01 > #s1_d3 > img'), 
				   $('#l04 > #s2_awan-a > img'), 
				   $('#l05 > #s2_awan-a > img'), 
				   $('#l06 > #s2_awan-a > img'),   
				   $('#l12 > #transition-bg2 > img'), 
				   $('#l12 > #transition-bg3 > img'), 
				   $('#l12 > #transition-bg4 > img'), 
				   $('#l13 > #transition-bg5 > img'),// 
				   $('#l12 > #transition-bg1 > img'),
				   $('#l01 > #s2_a > img'), 
				   $('#l01 > #s2_c1 > img'), 
				   $('#l01 > #s2_c3 > img'), 
				   $('#l01 > #s2_c6 > img'), 
				   $('#l01 > #s2_d > img'), 
				   $('#l01 > #s2_e1 > img'),
				   $('#l01 > #s2_e2 > img'),
				   $('#l03 > #s2_teks-a > img'),
				   $('#l07 > #s2_teks-a > img'), 
				   $('#l01 > #s3_b > img'),
				   $('#l01 > #s3_teks-a > img'),
				   $('#l02 > #s2_sun > img'),
				   $('#l02 > #s2_pohon-c > img'),
				   $('#l02 > #s2_pohon-d > img'),
				   $('#l02 > #s2_pohon-e > img'),
				   $('#l02 > #s2_pohon-f > img')]; //array of object yg mau diload sebelum page bisa dibaca

	var postload = [
					$('#l01 > #s2_e3 > img'), 
				    $('#l01 > #s2_e4 > img'),
				    $('#l10 > #s3_awan-a > img'), 
				    $('#l09 > #s3_awan-a > img'), 
				    $('#l08 > #s3_awan-a > img'), 
				    $('#l11 > #s3_awan-a > img'), 
					$('#l02 > #s2_tanah > img'),
					$('#l02 > #s2_pohon-a > img'),
					$('#l02 > #s2_pohon-b > img'),
					$('#l02 > #s2_pohon-g > img'),
					$('#l02 > #s2_semak > img'),
					$('#l02 > #s2_batu-a > img'),
					$('#l02 > #s2_batu-b > img'), 
					$('#l02 > #s2_batu-c > img'), 
					$('#l02 > #s2_teks-a > img'), 
					$('#l03 > #s2_pohon-a > img'), 
					$('#l03 > #s2_pohon-b > img'), 
					$('#l03 > #s2_batu-a > img'), 
					$('#l07 > #s2_pohon-a > img'), 
					$('#l07 > #s2_pohon-b > img'), 
					$('#l07 > #s2_batu-a > img'), 
					$('#l07 > #s2_batu-b > img'), 
					$('#l09 > #s3_a1 > img'), 
					$('#l09 > #s3_a2 > img'), 
					$('#l09 > #s3_a3 > img'), 
					$('#l12 > #sun > img'),
					$('#l12 > #shirt > img'), 
					$('#l12 > #kipas > img'),
					$('#l14 > #arms > img'), 
					$('#l15 > #head > img'),
					$('#l01 > #next > img')]; //array of object yg mau diload setelah page bisa dibaca

	function afterPreload() { //callback, fungsi dipanggil setelah preload beres
		$('#loader').hide();
		priorityLoad(postload, null); //postload, loading asset setelah page bisa dibaca
		$("#loader").fadeOut("slow");
    	$("body").css("overflow-y", "scroll");
    	$('#l01 > #s1_b > img').hide();
    	$('#l01 > #s1_c > img').hide();
    	$('#l01 > #s1_d1 > img').hide();
    	$('#l01 > #s1_d2 > img').hide();
    	$('#l01 > #s1_d3 > img').hide();
		$('#l12 > #transition-bg1 > img').hide();
		$('#l01 > #s2_a > img').hide();
		$('#l01 > #s2_c1 > img').hide();
		$('#l01 > #s2_c3 > img').hide();
		$('#l01 > #s2_c6 > img').hide();
		$('#l01 > #s2_d > img').hide();
		$('#l01 > #s2_e1 > img').hide();
		$('#l01 > #s2_e2 > img').hide();
		$('#l01 > #s3_b > img').hide();
		$('#l01 > #s3_teks-a > img').hide();
		$('#l02 > #s2_sun > img').hide();
		$('#l02 > #s2_pohon-c > img').hide();
		$('#l02 > #s2_pohon-d > img').hide();
		$('#l02 > #s2_pohon-e > img').hide();
		$('#l02 > #s2_pohon-f > img').hide();
		$('#l04 > #s2_awan-a > img').hide();
	    $('#l05 > #s2_awan-a > img').hide();
	    $('#l06 > #s2_awan-a > img').hide();
	    $('#l03 > #s2_teks-a > img').hide();
    	$('#l07 > #s2_teks-a > img').hide();
    	$(document).scroll(function () {
    		if ($(document).scrollTop() >= getDip(228) & $('#l01 > #s1_b > img').css('display') == 'none') {
    			var src = $('#l01 > #s1_b > img').attr('src');
    			$('#l01 > #s1_b > img').removeAttr('src').attr('src', src).show();
    		}
    		else if ($(document).scrollTop() >= getDip(1710) & $('#l01 > #s1_c > img').css('display') == 'none') {
    			var src = $('#l01 > #s1_c > img').attr('src');
    			$('#l01 > #s1_c > img').removeAttr('src').attr('src', src).show();
    		}
    		else if ($(document).scrollTop() >= getDip(4500) & $('#l01 > #s1_d1 > img').css('display') == 'none') {
    			var src1 = $('#l01 > #s1_d1 > img').attr('src');
    			var src2 = $('#l01 > #s1_d2 > img').attr('src');
    			var src3 = $('#l01 > #s1_d3 > img').attr('src');
    			$('#l01 > #s1_d1 > img').removeAttr('src').attr('src', src1).show();
    			setTimeout(function() {
    				$('#l01 > #s1_d2 > img').removeAttr('src').attr('src', src2).show();
    			}, 3500);
    			setTimeout(function() {
    				$('#l01 > #s1_d3 > img').removeAttr('src').attr('src', src3).show();
    			}, 6160);
    			$('html, body')
    				.animate({scrollTop: getDip(4800)}, 4000)
    				.animate({scrollTop: getDip(8190)}, 3000);
				setTimeout(function () {
    				$('html, body').animate({scrollTop: getDip(30410)}, 2000);
				}, 7200);
    		}
    		else if ($(document).scrollTop() >= getDip(30402) & $('#l12 > #transition-bg1 > img').css('display') == 'none') {
				$('#l12 > #transition-bg1 > img').fadeIn(5000);
				$('#l01 > #s2_a > img').fadeIn(5000);
				$('#l01 > #s2_c1 > img').fadeIn(5000);
				$('#l01 > #s2_c3 > img').fadeIn(5000);
				$('#l01 > #s2_c6 > img').fadeIn(5000);
				$('#l01 > #s2_d > img').fadeIn(5000);
				$('#l01 > #s2_e1 > img').fadeIn(5000);
				$('#l01 > #s2_e2 > img').fadeIn(5000);
				$('#l01 > #s3_b > img').fadeIn(5000);
				$('#l01 > #s3_teks-a > img').fadeIn(5000);
				$('#l02 > #s2_sun > img').fadeIn(5000);
				$('#l02 > #s2_pohon-c > img').fadeIn(5000);
				$('#l02 > #s2_pohon-d > img').fadeIn(5000);
				$('#l02 > #s2_pohon-e > img').fadeIn(5000);
				$('#l02 > #s2_pohon-f > img').fadeIn(5000);
				$('#l04 > #s2_awan-a > img').fadeIn(5000);
	   			$('#l05 > #s2_awan-a > img').fadeIn(5000);
	            $('#l06 > #s2_awan-a > img').fadeIn(5000);
    		}
    		else if ($(document).scrollTop() >= getDip(31892) & $('#l07 > #s2_teks-a > img').css('display') == 'none') {
    			var src = $('#l07 > #s2_teks-a > img').attr('src');
    			$('#l07 > #s2_teks-a > img').removeAttr('src').attr('src', src).show();
    		}
    		else if ($(document).scrollTop() >= getDip(34900) & $('#l03 > #s2_teks-a > img').css('display') == 'none') {
    			var src = $('#l03 > #s2_teks-a > img').attr('src');
    			$('#l03 > #s2_teks-a > img').removeAttr('src').attr('src', src).show();
    		}
    	});
	}

	priorityLoad(preload, afterPreload); //preload, loading asset sebelum page bisa dibaca
});

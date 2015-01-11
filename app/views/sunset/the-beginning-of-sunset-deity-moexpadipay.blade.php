<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		{{ HTML::script('js/jquery.min.js'); }}
		{{ HTML::style('css/bootstrap.min.css'); }}
		{{ HTML::script('js/bootstrap.min.js'); }}
		{{ HTML::style('css/sunset/the-beginning-of-sunset-deity-moexpadipay.css'); }}
		<link rel="shortcut icon" href="{{ asset('images/sunset/the-beginning-of-sunset-deity-01/nameless.png') }}">
		<link href='http://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet' type='text/css'>
		<title>MOE x PadiPay</title>
	</head>
	<body>
		<div class="col-xs-12 text-center poster padding-0">
		    <img src="{{asset('images/sunset/the-beginning-of-sunset-deity-tickets-new/poster.jpg')}}" class="center-block img-responsive">
		</div>
		<div class="col-xs-12 text-center header-border">
		    <img src="{{asset('images/sunset/the-beginning-of-sunset-deity-tickets-new/header/border.png')}}" class="center-block img-responsive">
		</div>
		<div class="col-xs-12 text-center header">
    		<div class="row">
		    	<div class="col-xs-12 col-sm-12 col-md-2 col-md-offset-2 header-elem">
		        	<a href="http://merchantofemotion.com/the-beginning-of-sunset-deity/announcement">
		        		<img src="{{asset('images/sunset/the-beginning-of-sunset-deity-tickets-new/header/home.png')}}" onmouseover="this.src='{{asset('images/sunset/the-beginning-of-sunset-deity-tickets-new/header/home_hover.png')}}';" onmouseout="this.src='{{asset('images/sunset/the-beginning-of-sunset-deity-tickets-new/header/home.png')}}';" class="center-block img-responsive">
		        	</a>
		      	</div>
		      	<div class="col-xs-12 col-sm-12 col-md-2 header-elem">
		      		<a href="http://merchantofemotion.com/the-beginning-of-sunset-deity/stories">	
		        		<img src="{{asset('images/sunset/the-beginning-of-sunset-deity-tickets-new/header/story.png')}}" onmouseover="this.src='{{asset('images/sunset/the-beginning-of-sunset-deity-tickets-new/header/story_hover.png')}}';" onmouseout="this.src='{{asset('images/sunset/the-beginning-of-sunset-deity-tickets-new/header/story.png')}}';" class="center-block img-responsive">
		        	</a>
		      	</div>
		      	<div class="col-xs-12 col-sm-12 col-md-2 header-elem">
		        	<a href="https://padipay.com/sunset-deity/">	
		        		<img src="{{asset('images/sunset/the-beginning-of-sunset-deity-tickets-new/header/ticket.png')}}" onmouseover="this.src='{{asset('images/sunset/the-beginning-of-sunset-deity-tickets-new/header/ticket_hover.png')}}';" onmouseout="this.src='{{asset('images/sunset/the-beginning-of-sunset-deity-tickets-new/header/ticket.png')}}';" class="center-block img-responsive">
		      		</a>
		      	</div>
		      	<div class="col-xs-12 col-sm-12 col-md-2 header-elem">
		        	<a href="http://merchantofemotion.com/the-beginning-of-sunset-deity/store">	
		        		<img src="{{asset('images/sunset/the-beginning-of-sunset-deity-tickets-new/header/merchandise.png')}}" onmouseover="this.src='{{asset('images/sunset/the-beginning-of-sunset-deity-tickets-new/header/merchandise_hover.png')}}';" onmouseout="this.src='{{asset('images/sunset/the-beginning-of-sunset-deity-tickets-new/header/merchandise.png')}}';" class="center-block img-responsive">
		      		</a>
		      	</div>
    		</div>
		</div>
		<div class="col-xs-12 text-center header-border">
		    <img src="{{asset('images/sunset/the-beginning-of-sunset-deity-tickets-new/header/border.png')}}" class="center-block img-responsive">
		</div>
		<div class="col-md-6 col-md-offset-3 text-justify padipay-info">
		    <p><img src="{{asset('images/sunset/the-beginning-of-sunset-deity-tickets-new/padipay-logo.png')}}" class="center-block img-responsive"></p>
		    <p class="text-center" id="padipay-tagline"><b>Pay Your Tickets on-the-go with PadiPay</b></p>
		    <p>Merchant of Emotion, bekerja sama dengan PadiPay, menghadirkan cara yang lebih mudah bagi Anda untuk memesan tiket pementasan teater multimedia Sunset Deity. Kini, setelah memasukkan data identitas, memilih waktu dan kelas kursi, serta melakukan transfer pembayaran, Anda tidak perlu lagi mengirimkan bukti transfer, karena akan secara otomatis terverifikasi melalui sistem kami yang baru. </p>
		    <p>Keuntungan utama dari pembayaran menggunakan PadiPay adalah proses verifikasi pembayaran secara langsung, sehingga pesanan tiket Anda dapat diteruskan dan diproses dengan lebih cepat.</p>
		    <p><a href="https://padipay.com/portal/">PadiPay</a> adalah <i>mobile payment provider</i> yang menyediakan sistem pembayaran cepat (instan) terpadu untuk memudahkan proses transaksi Anda.</p>
		    <p>Kerjasama antara Merchant of Emotion dengan PadiPay, memungkinkan Anda untuk memesan dan melakukan pembayaran tiket melalui beberapa opsi. Sistem PadiPay ini terintegrasi dengan Finpay, Mitrapay, serta Indomaret dan Alfamart.</p>
		    <p>Dalam halaman bayar, kini Anda dapat memilih tiga opsi pembayaran untuk tiket yang Anda pesan.</p>
		    <p><b>Finpay</b></p>
		    <ul>
		    	<li>Pembayaran dengan menu pembayaran telepon untuk seluruh bank di Indonesia dan untuk ATM, Internet Banking, dan Mobile Banking (kecuali ATM Mandiri).</li>
		    	<li>Anda dikenakan administration fee sebesar IDR 5.000 saat nominal akhir transaksi, dan otomatis IDR 2.500 sebagai biaya transfer.</li>
		    	<li>Tata cara pembayaran tercantum di halaman pembayaran.</li>
		    </ul>
		    <p><b>Indomaret dan Alfamart</b></p>
		    <ul>
		    	<li>Pembayaran dengan drop cash di Indomaret dan Alfamart.</li>
		    	<li>Anda dikenakan administration fee sebesar IDR 5.000 saat nominal akhir transaksi.</li>
		    	<li>Tata cara pembayaran tercantum di halaman pembayaran.</li>
		    </ul>
		    <p><b>Mitrapay (ATM, iBanking, dan Mobile Banking Mandiri)</b></p>
		    <ul>
		    	<li>Pembayaran dengan menu Pembayaran Lain Lain via Mitrapay 70009 untuk ATM, internet Banking, dan Mobile Banking Bank Mandiri</li>
		    	<li>Anda dikenakan administration fee sebesar IDR 5.000 saat nominal akhir transaksi.</li>
		    	<li>Tata cara pembayaran tercantum di halaman pembayaran.</li>
		    </ul>
		    <p>Anda akan mendapatkan dua kali email notifikasi (<i>billing statement</i> dan <i>payment statement</i>), masing-masing setelah memesan dan setelah membayar. Silakan bawa email bukti pembayaran (<i>payment statement</i>) untuk ditukarkan dengan tiket pada hari dan jam pementasan yang Anda pilih.</p>
		</div>
	</body>
</html>
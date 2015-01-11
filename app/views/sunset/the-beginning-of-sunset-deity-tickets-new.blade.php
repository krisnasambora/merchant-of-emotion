<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		{{ HTML::script('js/jquery.min.js'); }}
		{{ HTML::style('css/bootstrap.min.css'); }}
		{{ HTML::script('js/bootstrap.min.js'); }}
		{{ HTML::style('css/sunset/the-beginning-of-sunset-deity-tickets-new.css'); }}
		<link rel="shortcut icon" href="{{ asset('images/sunset/the-beginning-of-sunset-deity-01/nameless.png') }}">
		<link href='http://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet' type='text/css'>
		<title>Get Tickets!</title>
	</head>
	<body>
		<div class="col-xs-12 text-center poster padding-0">
		    <a href="http://merchantofemotion.com/the-beginning-of-sunset-deity/announcement"><img src="{{asset('images/sunset/the-beginning-of-sunset-deity-tickets-new/poster.jpg')}}" class="center-block img-responsive"></a>
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
		        	<img src="{{asset('images/sunset/the-beginning-of-sunset-deity-tickets-new/header/ticket.png')}}" class="center-block img-responsive">
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
		<div class="col-md-8 col-md-offset-2 text-center preface">
			<p>
		    	We are thrilled to welcome you to the show. Through Sunset Deity's production, we inquire to find what's fresh and bringing it to the stage for wide appreciation; and you are part of the magic that make everything happens. 
		    </p>
		</div>
		<div class="col-xs-12 text-center padipay-banner">
			<a href="http://merchantofemotion.com/the-beginning-of-sunset-deity/padipay">
		    	<img src="{{asset('images/sunset/the-beginning-of-sunset-deity-tickets-new/padipay.png')}}" class="center-block img-responsive">
			</a>
		</div>
    	<div class="container-fluid sunset-sub">
			<div class="row sub">
				<div class="container-fluid">
					<div class="row form">
						<div class="col-xs-12 text-center" style="margin-top:55px;margin-bottom:30px;">
				    		<img src="{{asset('images/sunset/the-beginning-of-sunset-deity-tickets/1 get.png')}}" class="center-block img-responsive">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-6 col-xs-offset-3 text-right">
							<div class="form-group">	
								<input type="text" class="form-control underlined" id="name" placeholder="name">
							</div>
							<div class="form-group">	
								<input type="text" class="form-control underlined" id="mail" placeholder="email address">
							</div>
							<div class="form-group">
								<input type="text" class="form-control underlined" id="phone" placeholder="phone number">	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 text-center" style="margin-top:55px;margin-bottom:30px;">
				    		<img src="{{asset('images/sunset/the-beginning-of-sunset-deity-tickets/2 show.png')}}" class="center-block img-responsive">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-1 col-sm-offset-3 text-center padding-0">
							<p>Date</p>
						</div>
						<div class="col-xs-12 col-sm-2 text-center padding-0">
							<div class="form-group date">
								<label class="radio-inline">
									<input type="radio" name="date" value="1" checked><br/><p>23</p>
								</label>
								<label class="radio-inline">
									<input type="radio" name="date" value="2"><br/><p>24</p>
								</label>
								<label class="radio-inline">
									<input type="radio" name="date" value="3"><br/><p>25</p>
								</label>
							</div>
						</div>
						<div class="col-xs-12 col-sm-1 text-center padding-0">
							<p>Time</p>
						</div>
						<div class="col-xs-12 col-sm-2 text-center padding-0">
							<div class="form-group time">
								<label class="radio-inline">
								 	<input type="radio" name="time" value="1" checked><br/><p>16.00</p>
								</label>
								<label class="radio-inline">
									<input type="radio" name="time" value="2"><br/><p>19.00</p>
								</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 text-center" style="margin-top:20px;margin-bottom:30px;">
				    		<img src="{{asset('images/sunset/the-beginning-of-sunset-deity-tickets/3 class.png')}}" class="center-block img-responsive">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-2 col-sm-offset-3 text-center" style="margin-top:5px;margin-bottom:30px;">
							<div class="form-group class">
								<label class="radio-inline">
									<input type="radio" name="class" value="1" checked>
								 	<p>REGULAR</p>
								 	<p>Rp 50.000</p>
								</label>
							</div>
						</div>
						<div class="col-xs-12 col-sm-2 text-center" style="margin-top:5px;margin-bottom:30px;">
							<div class="form-group class">
								<label class="radio-inline">
									<input type="radio" name="class" value="2">
									<p>VIP</p>
									<p>Rp 100.000</p>
								</label>
							</div>
						</div>
						<div class="col-xs-4 col-xs-offset-4 col-sm-2 col-sm-offset-0 col-md-offset-0 col-lg-offset-0">
				    		<div class="form-group">
								<select class="form-control">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
								</select>
							</div>
						</div>
					</div><br/>
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1 text-center" style="margin-top:-10px;margin-bottom:30px;">
							<div class="form-group">
								<input class="buy-tickets" type="submit" value="Order">
							</div>
						</div>
					</div>
					<div id="row">
						<div class="col-md-2 col-md-offset-5 text-center padding-0 faq">
				    		<a href="" data-toggle="modal" data-target="#faq"><img src="{{asset('images/sunset/the-beginning-of-sunset-deity-tickets-new/FAQ.png')}}" class="center-block img-responsive"></a>
						</div>
						<div class="modal fade" id="faq" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div id="faq-content" class="modal-content">
									<div class="modal-body">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><br>
										<p class="text-left"><b>1. Saya sudah memesan dan memasukkan data dalam website merchantofemotion.com, tetapi belum mendapatkan email konfirmasi. Apa yang harus saya lakukan?</b></p>
										<p class="text-left">Anda bisa mencoba untuk memasukkan ulang data pemesanan dalam website (ada kemungkinan tidak stabilnya koneksi internet mempengaruhi input dalam website kami). Apabila email konfirmasi masih belum diterima setelah Anda memasukkan data kembali, silakan hubungi Dea di +6281910064981 atau email ke info@merchantofemotion.com. Kami akan hubungi Anda untuk konfirmasi dalam 1x24 jam.</p>
										<p class="text-left"><b>2. Apakah saya dapat memilih tempat duduk di hari pertunjukan dalam kelas tiket yang telah saya beli?</b></p>
										<p class="text-left">Tempat duduk untuk Pementasan Sunset Deity tersedia dalam dua kelas, yaitu VIP dan Reguler. Setelah mengecek kelas tiket yang Anda beli, pemilihan kursi dilakukan dengan sistem first-come, first-served—ada baiknya Anda datang lebih awal untuk mendapatkan tempat duduk menonton yang ideal menurut Anda.</p>
										<img src="{{asset('images/sunset/the-beginning-of-sunset-deity-tickets/seats.jpg')}}" class="center-block img-responsive">
										<p class="text-left"><b>3. Apakah ada diskon pembelian tiket untuk pementasan ini?</b><p>
										<p class="text-left">Promo diskon hanya berlaku untuk pemesanan offline (melalui narahubung Dea di +62 819 1006 4981 atau LINE ID: deacm). Dapatkan diskon 10% untuk pelajar (dengan menyertakan foto atau scan kartu pelajar saat mengirim bukti pembayaran) untuk seluruh pertunjukan petang (16.00) pada 23 - 25 Januari 2015.<p>
										<p class="text-left"><b>4. Jika saya telah memesan tiket pada hari dan waktu pertunjukan tertentu, apakah dapat saya tukar dengan hari dan waktu pertunjukan lain?</b><p>
										<p class="text-left">Sehubungan dengan terbatasnya kursi yang tersebar dalam 6 kali pertunjukan berbeda (23-25 Januari 2015, petang dan malam untuk masing-masing harinya), dengan menyesal kami tidak menerima penukaran tiket untuk hari dan waktu pertunjukan berbeda. Mohon pastikan jadwal Anda sebelum memesan kelas tiket.<p>
										<p class="text-left"><b>5. Apakah akan ada nomor kursi? Jika ada bagaimana saya memastikannya?</b></p>
										<p class="text-left">Ya, nomor kursi akan kami sematkan, namun nomor tidak akan tertera pada bukti pembayaran yang Anda dapatkan. Anda akan mendapatkan nomor kursi saat menukar tiket di hari pertunjukan.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</body>
</html>
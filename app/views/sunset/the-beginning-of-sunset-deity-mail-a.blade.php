<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
		{{ HTML::style('css/bootstrap.min.css'); }}
		{{ HTML::script('js/bootstrap.min.js'); }}
	</head>
	<body>
		<p>Teruntuk, {{$name}}</p><br/>
		<p>
			Terima kasih atas partisipasi Anda untuk turut memeriahkan Pemetasan Teater Sunset Deity. Silakan ikuti langkah-langkah pembayaran dan proses konfirmasi pemesanan tiket di bawah ini:
		</p><br/>
		<p><b>DATA PEMESAN TIKET</b></p>
		<p>No. ID : {{$order_id}}</p>
		<p>Nama: {{$name}}</p>
		<p>No. HP : {{$phone}}</p>
		<p>Email : {{$mail}}</p><br/>

		<p><b>DETAIL PEMESANAN TIKET</b></p>
		@if ($show_id == 1)
			<p>HARI, TANGGAL, WAKTU PENTAS: <b>Jumat, 23 Januari 2014, 16:00</b></p>
    	@elseif ($show_id == 2)
    		<p>HARI, TANGGAL, WAKTU PENTAS: <b>Jumat, 23 Januari 2014, 19:30</b></p>
    	@elseif ($show_id == 3)
    		<p>HARI, TANGGAL, WAKTU PENTAS: <b>Sabtu, 24 Januari 2014, 16:00</b></p>
    	@elseif ($show_id == 4)
    		<p>HARI, TANGGAL, WAKTU PENTAS: <b>Sabtu, 24 Januari 2014, 19:30</b></p>
    	@elseif ($show_id == 5)
    		<p>HARI, TANGGAL, WAKTU PENTAS: <b>Minggu, 25 Januari 2014, 16:00</b></p>
    	@elseif ($show_id == 6)
    		<p>HARI, TANGGAL, WAKTU PENTAS: <b>Minggu, 25 Januari 2014, 19:30</b></p>
    	@endif

		<p>Jumlah Tiket : {{$amount}}</p>
		@if ($class == 1)
    		<p>Posisi Duduk : REGULAR</p>
    	@elseif ($class == 2)
    		<p>Posisi Duduk : VIP</p>
    	@endif
    	@if ($class == 1)
    		<p>Total Pemesanan: {{number_format((string)($amount * 50000))}}</p>
    	@elseif ($class == 2)
    		<p>Total Pemesanan: {{number_format((string)($amount * 100000))}}</p>
    	@endif
    	<p>Kode Pembayaran : {{$order_id}}</p>
    	@if ($class == 1)
    		<p><b>JUMLAH TRANSFER :  {{number_format((string)($amount * 50000))}} + {{ltrim($order_id ,'0')}} = Rp. {{number_format($price)}} </b></p><br/>
    	@elseif ($class == 2)
    		<p><b>JUMLAH TRANSFER :  {{number_format((string)($amount * 100000))}} + {{ltrim($order_id, '0')}} = Rp. {{number_format($price)}} </b></p><br/>
    	@endif

    	<p><b>CARA PEMBAYARAN</b></p>
    	<p>Segera lakukan pembayaran selambatnya 1 x 24 jam setelah pemesanan melalui <b>Bank BNI</b>, <b>BCA</b>, atau <b>Mandiri</b>: </p><br/>
    	<p align="center"><b>BNI</b><p>
    	<p align="center">0266-897-755<p>
    	<p align="center">Tri Adi Pasha<p><br/>
    	<p align="center"><b>BCA</b><p>
    	<p align="center">0860-478-781<p>
    	<p align="center">Tri Adi Pasha<p><br/>
    	<p align="center"><b>Mandiri</b><p>
    	<p align="center">900-00-1840496-3<p>
    	<p align="center">Tri Adi Pasha<p><br/>

    	<p>Jumlah nominal pembayaran harus sesuai dengan yang tertera pada keterangan <b>"JUMLAH TRANSFER"</b> diatas, tidak lebih dan tidak kurang.</p><br/>
    	<p>Masa pemesanan Anda adalah 1 x 24 jam, jika lewat dari waktu tersebut maka kami akan mengirimkan notifikasi yang menandakan bahwa pemesanan Anda telah dibatalkan secara sistem. Silakan lakukan pemesanan ulang jika kuota tiket masih tersedia di www.merchantofemotion.com.</p><br/>
    	<p><b>KONFIRMASI PEMBAYARAN</b></p>
    	<p>Setelah melakukan pembayaran, segera lakukan konfirmasi pembayaran ke dengan cara membalas e-mail ini 
dengan mencantumkan informasi: Nama Pemesan, Pilihan Bank, Jumlah Transfer, dan Bukti Pembayaran/Transfer (dalam lampiran) pada body email.</p><br/>
		<p>Setelah kami menerima pembayaran Anda, kami akan mengirimkan Voucher Tiket (dalam lampiran) melalui e-mail, yang kemudian bisa Anda cetak secara mandiri sebagai bukti pembayaran untuk mengambil tiket Anda.</p><br/>
		<p>Anda akan menerima e-mail Voucher Tiket dalam jangka waktu maksimal 2x24 Jam setelah anda melakukan konfirmasi pembayaran. Jika Anda sudah melakukan konfirmasi pembayaran tetapi belum menerima e-mail Voucher Tiket dari kami selama lebih dari 2x24 jam, harap hubungi kami via e-mail info@merchantofemotion.com atau kontak <b>Dea (0819 1006 4981).</b></p><br/>
		<p>Salam hangat,</p>
		<p>Merchant of Emotion</p>
	</body>
</html>

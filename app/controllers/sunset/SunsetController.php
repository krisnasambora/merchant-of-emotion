<?php 
define('BUDGETS_DIR', public_path('utilities/sunset'));

class SunsetController extends BaseController{

		public function showTBSD01(){
			if ( !Cookie::get('page_viewed') ) {
		        // Update view counter of post
				DB::table('viewcounts')->where('page', 'tbsd-01')->increment('count', 1);

		        // Create a cookie before the response and set it for 30 days
		        Cookie::queue('page_viewed', true, 60 * 24 * 30);
		    }
		    
			return View::make('sunset.the-beginning-of-sunset-deity-01');
		}

		public function showTBSD01m(){
			if ( !Cookie::get('page_viewed') ) {
		        // Update view counter of post
				DB::table('viewcounts')->where('page', 'tbsd-01')->increment('count', 1);

		        // Create a cookie before the response and set it for 30 days
		        Cookie::queue('page_viewed', true, 60 * 24 * 30);
		    }
		    
			return View::make('sunset.the-beginning-of-sunset-deity-01-m');
		}

		public function showTBSD02(){
			if ( !Cookie::get('page-2_viewed') ) {
		        // Update view counter of post
				DB::table('viewcounts')->where('page', 'tbsd-02')->increment('count', 1);

		        // Create a cookie before the response and set it for 30 days
		        Cookie::queue('page-2_viewed', true, 60 * 24 * 30);
		    }
		    
			return View::make('sunset.the-beginning-of-sunset-deity-02-scalable');
		}

		public function showTBSD02horizon(){
			if ( !Cookie::get('page-2_viewed') ) {
		        // Update view counter of post
				DB::table('viewcounts')->where('page', 'tbsd-02')->increment('count', 1);

		        // Create a cookie before the response and set it for 30 days
		        Cookie::queue('page-2_viewed', true, 60 * 24 * 30);
		    }
		    
			return View::make('sunset.the-beginning-of-sunset-deity-02-horizon');
		}

		public function showTBSD02ma(){
			if ( !Cookie::get('page-2_viewed') ) {
		        // Update view counter of post
				DB::table('viewcounts')->where('page', 'tbsd-02')->increment('count', 1);

		        // Create a cookie before the response and set it for 30 days
		        Cookie::queue('page-2_viewed', true, 60 * 24 * 30);
		    }
		    
			return View::make('sunset.the-beginning-of-sunset-deity-02-m-a');
		}

		public function showTBSD02mb(){
			if ( !Cookie::get('page-2_viewed') ) {
		        // Update view counter of post
				DB::table('viewcounts')->where('page', 'tbsd-02')->increment('count', 1);

		        // Create a cookie before the response and set it for 30 days
		        Cookie::queue('page-2_viewed', true, 60 * 24 * 30);
		    }
		    
			return View::make('sunset.the-beginning-of-sunset-deity-02-m-b');
		}

		public function showTBSD02mc(){
			if ( !Cookie::get('page-2_viewed') ) {
		        // Update view counter of post
				DB::table('viewcounts')->where('page', 'tbsd-02')->increment('count', 1);

		        // Create a cookie before the response and set it for 30 days
		        Cookie::queue('page-2_viewed', true, 60 * 24 * 30);
		    }
		    
			return View::make('sunset.the-beginning-of-sunset-deity-02-m-c');
		}

		public function showTBSD02md(){
			if ( !Cookie::get('page-2_viewed') ) {
		        // Update view counter of post
				DB::table('viewcounts')->where('page', 'tbsd-02')->increment('count', 1);

		        // Create a cookie before the response and set it for 30 days
		        Cookie::queue('page-2_viewed', true, 60 * 24 * 30);
		    }
		    
			return View::make('sunset.the-beginning-of-sunset-deity-02-m-d');
		}

		public function showTBSDtix(){
			return View::make('sunset.the-beginning-of-sunset-deity-tix');
		}

		public function showTBSD03(){
			if ( !Cookie::get('page-3_viewed') ) {
		        // Update view counter of post
				DB::table('viewcounts')->where('page', 'tbsd-03')->increment('count', 1);

		        // Create a cookie before the response and set it for 30 days
		        Cookie::queue('page-3_viewed', true, 60 * 24 * 30);
		    }
		    
			return View::make('sunset.the-beginning-of-sunset-deity-03');
		}

		public function showTBSD03m(){
			if ( !Cookie::get('page-3_viewed') ) {
		        // Update view counter of post
				DB::table('viewcounts')->where('page', 'tbsd-03')->increment('count', 1);

		        // Create a cookie before the response and set it for 30 days
		        Cookie::queue('page-3_viewed', true, 60 * 24 * 30);
		    }
		    
			return View::make('sunset.the-beginning-of-sunset-deity-03-m');
		}

		public function insertNewTBSDorder(){
			$validation = Validator::make(
			    array(
			        'name' => Input::get( 'name' ),
			        'mail' => Input::get( 'mail' ),
			        'phone' => Input::get( 'phone' )
			    ),
			    array(
			        'name' => 'required',
			        'mail' => 'required|email',
			        'phone' => 'required'
			    )
			);
			if ($validation->fails()){
			    Session::flash('failure', 'Please enter the required information.');
				return Redirect::to('the-beginning-of-sunset-deity/tickets');
			}
			else{
				$show = DB::table('TBSD_shows')->where('show_id', (int)Input::get('show_id'))->where('class', (int)Input::get('class'))->get();
				if(($show[0]->confirmed + (int)Input::get('amount')) > $show[0]->capacity){
					Session::flash('failure', 'The show you ordered ticket for is full.');
					return Redirect::to('the-beginning-of-sunset-deity/tickets');
				}else{
				    $order = new Tbsd_order;
					$order->name = Input::get('name');
					$order->mail = Input::get('mail');
					$order->phone = Input::get('phone');					
					$order->show_id = (int)Input::get('show_id');
					$order->class = (int)Input::get('class');
					$order->amount = (int)Input::get('amount');
					$order->status = 'Pending';				
					$order->save();

					$order->order_id = str_pad($order->id, 4, '0', STR_PAD_LEFT);
					//REGULAR TIX
					if($order->class == 1){
						$order->price = $order->amount * 50000 + $order->id;
					}else{
						$order->price = $order->amount * 100000 + $order->id;
					}

					$order->save();

					$this->mailOrderSubmission($order->price, $order->mail, $order->name, $order->order_id, $order->phone, $order->show_id, $order->class, $order->amount);

					Session::flash('success', 'Your order has been successfully registered!');
					return Redirect::to('the-beginning-of-sunset-deity/tickets');
				}
			}
		}

		public function ticketing(){
			$orders = Tbsd_order::all();
			$shows = Tbsd_show::all();
			$view = View::make('sunset.the-beginning-of-sunset-deity-ticketing', array(
				'orders' => $orders,
				'shows' => $shows
			));

			return $view;
		}

		public function deleteOrder($name, $phone, $order_id, $show_id, $class, $amount, $mail){
			DB::table('TBSD_orders')->where('order_id', $order_id)->delete();

			$this->mailOrderCancellation($mail, $name, $order_id, $phone, $show_id, $class, $amount);

			return Redirect::route('ticketing');
		}

		public function confirmOrder($name, $phone, $order_id, $show_id, $class, $amount, $mail){
			DB::table('TBSD_shows')->where('show_id', $show_id)->where('class', $class)->increment('confirmed', $amount);
			DB::table('TBSD_orders')->where('order_id', $order_id)->update(array('status' => 'Confirmed'));

			$posisi_duduk = '';

			if($class == 1){
				$posisi_duduk = 'REGULAR';
			}else{
				$posisi_duduk = 'VIP';
			}

			$when = '';
			switch($show_id){
				case 1:
					$when = 'Jumat, 23 Januari 2015, 16:00';
					break;
				case 2:
					$when = 'Jumat, 23 Januari 2015, 19:30';
					break;
				case 3:
					$when = 'Sabtu, 24 Januari 2015, 16:00';
					break;
				case 4:
					$when = 'Sabtu, 24 Januari 2015, 19:30';
					break;
				case 5:
					$when = 'Minggu, 25 Januari 2015, 16:00';
					break;
				case 6:
					$when = 'Minggu, 25 Januari 2015, 19:30';
					break;					
			}

			if (!is_dir(BUDGETS_DIR)){
			    mkdir(BUDGETS_DIR, 0755, true);
			}

			$html = '
					<!DOCTYPE html>
					<html>
						<head>
						<style>
							body {
							    font-family: "Courier New", Courier, monospace;
							}
							.to-align-1{
								width:200px;
								float: left;
							}
						</style>
							<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
						</head>
					    <body>
				            <div style="width:500px;height:115px;margin-left:auto;margin-right:auto;">
				                <img src="'.public_path('images/sunset/logo-d.jpg').'"  style="max-width:100%;max-height:100%;"></img>
				            </div>
				            <div style="width:500px;margin-left:auto;margin-right:auto;font-weight:bold;font-size:11px;">
				                <p align="center">Teater Tertutup Dago Tea House</p>
				                <p align="center">Jalan Bukit Dago Utara no. 53, Bandung</p>
				                <p align="center">23 - 25 Januari 2015</p>
				            </div>
				            <div style="margin-left: 550px; width:500px; height:135px;">
				                <div style="float: right; width: 150px;">
				                    <p align="center">Kode Pemesanan</p>
				                </div>
				                <div class="box" style="float: right; width:150px; height:70px;border-style: solid; border-width: 1px;">
				                    <p align="center" style="font-size:25px;font-weight:bold;"> '.$order_id.' </p>
				                </div>
				            </div>
				            <div style="float: right; width:100%; height:125px;">
				                <p><span class="to-align-1">Nama </span> <span>:  '.$name.' </span></p>
				                <p><span class="to-align-1">No Telepon </span> <span>:  '.$phone.' </span></p>
				                <p><span class="to-align-1">Email       </span> <span>:  '.$mail.' </span></p>
				                <p><span class="to-align-1">No ID       </span> <span> :  '.$order_id.' </span></p>
				                <p><span class="to-align-1">Jadwal Pertunjukkan </span> <span> :  '.$when.' </span></p>
				            </div>
				            <br/>
				            <br/>
				            <br/>	
				            <br/>					            
				            <div style="margin-left:auto;margin-right:auto;text-align:center;width:100%;height:270px;">
				                <div style="margin-left:auto;margin-right:auto;text-align:center;width:100%;">
				                    <div style="width:100%;">
				                        <p align="center">Posisi Duduk </p>
				                        <div class="box"style="margin-left:auto;margin-right:auto;width:140px; height:78px;border-style: solid; border-width: 1px;">
				                            <p align="center" style="margin-top:25px;font-size:25px;font-weight:bold;"> '.$posisi_duduk.' </p>
				                        </div>
				                    </div>
				                </div>
				                <br/>
				                <div style="margin-left:auto;margin-right:auto;text-align:center;width:100%;height:78px;">
				                    <div style="width:100%;">
				                        <p align="center">Jumlah Tiket </p>
				                        <div class="box"style="margin-left:auto;margin-right:auto;width:140px; height:78px;border-style: solid; border-width: 1px;">
				                            <p align="center" style="margin-top:25px;font-size:25px;font-weight:bold;"> '.$amount.' </p>
				                        </div>
				                    </div>
				                </div>
				            </div>
				            <br/>
				            <br/>
				            <br/>
				            <br/>
				            <br/>
				            <div style="float:right; font-size:12px; width:100%;">
				                <div><span>Ketentuan :</span></div>
				                <div><span>1. Bukti Pembayaran ini berlaku untuk penukaran tiket asli, bukan sebagai tiket masuk.</span></div>
				                <div><span>2. Print atau tunjukkan Bukti Pembayaran ini untuk ditukarkan dengan tiket masuk.</span></div>
				                <div><span>3. Penonton dianjurkan membawa kartu identitas (KTP/SIM) asli yang sesuai dengan nama pada saat melakukan pembelian</span></div>
				                <div><span>4. Pihak Merchant of Emotion tidak bertanggung jawab atas kehilangan Bukti Pembayaran ini.</span></div>
				                <div><span>5. Penukaran Bukti Pembayaran ini berlaku hari H pertunjukan (atau tunggu info lebih lanjut)</span></div>
				                <div><span>6. Pemesan akan membebaskan pihak penyelenggara dari segala macam bentuk tuntutan hukum yang timbul karena kelalaian dan/atau kesalahan pemesan sendiri.</span></div>
				            </div>
					    </body>
					</html>';

			$outputName = 'Bukti Pembayaran #' . $order_id;
			$pdfPath = BUDGETS_DIR.'/'.$outputName.'.pdf';
			File::put($pdfPath, PDF::load($html, 'A4', 'portrait')->output());

			Mail::send('sunset.the-beginning-of-sunset-deity-mail-c', array(
				'mail' => $mail,
				'order_id' => $order_id,
				'name' => $name, 
				'phone' => $phone,
				'show_id' => $show_id,
				'class' => $class,
				'amount' => $amount
				), 
				function($message) use ($pdfPath, $mail){
			    $message->from('info@merchantofemotion.com', 'Online Ticketing MOE');
			    $message->to($mail)->subject('Konfirmasi Pembayaran');
			    $message->attach($pdfPath);
			});

			return Redirect::route('ticketing');
		}

		public function showLoginPage(){
			return View::make('sunset.the-beginning-of-sunset-deity-login');
		}

		public function store(){
			$input = Input::all();

			if (Auth::attempt(array('username' => $input['username'], 'password' => $input['password']), true))
			{
			    // The user is being remembered...
			    Session::flash('success', 'logged in as '.Auth::user()->username);
			    return Redirect::intended('ticketing');
			}
			
			dd('problem');	
		}

		public function destroy(){
			Auth::logout();

			return Redirect::route('ticketing');
		}

		public function mailOrderSubmission($price, $mail, $name, $order_id, $phone, $show_id, $class, $amount){
			Mail::send('sunset.the-beginning-of-sunset-deity-mail-a', array(
				'price' => $price,
				'mail' => $mail, 
				'name' => $name, 
				'order_id' => $order_id,
				'phone' => $phone,
				'show_id' => $show_id,
				'class' => $class,
				'amount' => $amount
				), function($msg) use ($mail, $order_id){
					$msg->from('info@merchantofemotion.com', 'Online Ticketing MOE');
					$msg->to($mail)->subject('Pesanan Tiket #' . $order_id);
				}
			);
		}

		public function mailOrderCancellation($mail, $name, $order_id, $phone, $show_id, $class, $amount){
			Mail::send('sunset.the-beginning-of-sunset-deity-mail-b', array(
				'mail' => $mail, 
				'name' => $name, 
				'order_id' => $order_id,
				'phone' => $phone,
				'show_id' => $show_id,
				'class' => $class,
				'amount' => $amount
				), function($msg) use ($mail, $order_id){
					$msg->from('info@merchantofemotion.com', 'Online Ticketing MOE');
					$msg->to($mail)->subject('Notifikasi Pesanan Kadaluarsa');
				}
			);
		}

		public function mailOrderConfirmation(){

		}

		public function MailExample(){
			$member = new Subscriber;
			$member->name = Input::get('name');
			$member->mail = Input::get('mail');
			$member->save();

			Mail::send('emails.homesite.greetsubscriber', array('recipient' => Input::get('name')), function($msg) {
				$msg->from('merchantofemotiondummy@gmail.com', 'MoE Admin');
				$msg->to(Input::get('mail'))->subject('Thank you for subscribing to MOE!');
			});

			return Redirect::route('/');
		}
}


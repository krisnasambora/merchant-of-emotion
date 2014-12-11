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

		public function showTBSD02(){
			if ( !Cookie::get('page-2_viewed') ) {
		        // Update view counter of post
				DB::table('viewcounts')->where('page', 'tbsd-02')->increment('count', 1);

		        // Create a cookie before the response and set it for 30 days
		        Cookie::queue('page-2_viewed', true, 60 * 24 * 30);
		    }
		    
			return View::make('sunset.the-beginning-of-sunset-deity-02-scalable');
		}

		public function showTBSDtix(){
			return View::make('sunset.the-beginning-of-sunset-deity-tix');
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
					$order = DB::table('TBSD_orders')
					    ->where('mail', Input::get('mail'))
					    ->first();

					if (is_null($order)) {
						//validasi available seats dulu
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

						$this->mailOrderSubmission($order->mail, $order->name, $order->order_id, $order->phone, $order->show_id, $order->class, $order->amount);

						Session::flash('success', 'Your order has been successfully registered!');
						return Redirect::to('the-beginning-of-sunset-deity/tickets');
					} else {
					    Session::flash('failure', 'The email you entered has already been registered.');
						return Redirect::to('the-beginning-of-sunset-deity/tickets');
					}
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
			DB::table('TBSD_orders')->where('mail', $mail)->delete();

			$this->mailOrderCancellation($mail, $name, $order_id, $phone, $show_id, $class, $amount);

			return Redirect::route('ticketing');
		}

		public function confirmOrder($name, $phone, $order_id, $show_id, $class, $amount, $mail){
			DB::table('TBSD_shows')->where('show_id', $show_id)->where('class', $class)->increment('confirmed', $amount);
			DB::table('TBSD_orders')->where('mail', $mail)->update(array('status' => 'Confirmed'));

			$posisi_duduk = '';

			if($class == 1){
				$posisi_duduk = 'REGULAR';
			}else{
				$posisi_duduk = 'VIP';
			}

			if (!is_dir(BUDGETS_DIR)){
			    mkdir(BUDGETS_DIR, 0755, true);
			}

			$html = '<html>
					    <body style="font-family: Courier New; font-size:12px;">
					        <div style="width:500px;height:115px;margin-left:15%;">
					            <img src="'.public_path('images/sunset/logo-d.jpg').'"  style="max-width:100%;max-height:100%;"></img>
					        </div>
					        <p>Kode Pemesanan</p>
					        <div class="box"style="float: right; width:150px; height:70px;border-style: solid; border-width: 1px;">
					            <p align="center" style="font-size:25px;font-weight:bold;"> '.$order_id.' </p>
					        </div><br/>
					        <p>Nama        :  '.$name.' </p>
					        <p>No Telepon  :  '.$phone.' </p>
					        <p>Email       :  '.$mail.' </p>
					        <p>No ID       :  '.$order_id.' </p>
					        <div style="margin-left: 23%;text-align:center;width:400px;height:360px;">
					            <p align="center">Posisi Duduk </p>
					            <div class="box"style="margin-left:32%;width:140px; height:110px;border-style: solid; border-width: 1px;">
					                <p align="center" style="margin-top:38px;font-size:25px;font-weight:bold;"> '.$posisi_duduk.' </p>
					            </div>
					            <br/>
					            <p align="center">Jumlah Tiket </p>
					            <div class="box"style="margin-left:32%;width:140px; height:110px;border-style: solid; border-width: 1px;">
					                <p align="center" style="margin-top:38px;font-size:25px;font-weight:bold;"> '.$amount.' </p>
					            </div>
					        </div>
					        <br/>
					        <div style="font-size:12px">
						        <p>Ketentuan :</p>
						        <p>1. Bukti Pembayaran ini berlaku untuk penukaran tiket asli, bukan sebagai tiket masuk.</p>
						        <p>2. Print Bukti Pembayaran ini untuk ditukarkan dengan tiket masuk.</p>
						        <p>3. Pihak Merchant of Emotion tidak bertanggung jawab atas kehilangan Bukti Pembayaran ini.</p>
						        <p>4. Penukaran Bukti Pembayaran ini berlaku hari H pertunjukan (atau tunggu info lebih lanjut)</p>
						        <p>5. Pemesan akan membebaskan pihak penyelenggara dari segala macam bentuk tuntutan hukum yang timbul karena kelalaian dan/atau kesalahan pemesan sendiri.</p>
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

		public function mailOrderSubmission($mail, $name, $order_id, $phone, $show_id, $class, $amount){
			Mail::send('sunset.the-beginning-of-sunset-deity-mail-a', array(
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


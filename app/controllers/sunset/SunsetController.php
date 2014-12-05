<?php 
	
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
		    
			return View::make('sunset.the-beginning-of-sunset-deity-02');
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
			if ($validation->fails())
			{
			    Session::flash('failure', 'Please enter the required information.');
				return Redirect::to('the-beginning-of-sunset-deity/tickets');
			}
			else{
				date_default_timezone_set('Asia/Bangkok');
				$order = DB::table('tbsd_orders')
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
					$order->confirmed = false;				
					$order->save();

					Session::flash('success', 'Your order has been successfully registered!');
					return Redirect::to('the-beginning-of-sunset-deity/tickets');
				} else {
				    Session::flash('failure', 'The email you entered has already been registered.');
					return Redirect::to('the-beginning-of-sunset-deity/tickets');
				}
			}
			
		}
}


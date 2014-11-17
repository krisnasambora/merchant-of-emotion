<?php 
	
class SunsetController extends BaseController{

		public function insertTBSDSubscriber(){
			$subber = DB::table('subscribers')
			    ->where('mail', Input::get('mail'))
			    ->first();

			if (is_null($subber)) {
			    $subber = new Subscriber;
				$subber->mail = Input::get('mail');
				$subber->save();

				Session::flash('success', 'You have been successfully registered!');
				return Redirect::to('the-beginning-of-sunset-deity/sub');
			} else {
			    Session::flash('failure', 'You have already been registered.');
				return Redirect::to('the-beginning-of-sunset-deity/sub');

			}	
		}
}


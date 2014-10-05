<?php 
	
class HomesiteController extends BaseController{

	public function insertNewSubscriber(){
		$member = new Subscriber;
		$member->name = Input::get('name');
		$member->mail = Input::get('mail');
		$member->save();

		return Redirect::route('/');
	}
}


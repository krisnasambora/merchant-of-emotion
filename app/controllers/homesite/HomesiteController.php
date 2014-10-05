<?php 
	
class HomesiteController extends BaseController{

	public function insertNewSubscriber(){
		$member = new Subscriber;
		$member->name = Input::get('name');
		$member->mail = Input::get('mail');
		$member->save();

		return Redirect::route('/');
	}

	public function insertNewCollaborator(){
		$member = new Collaborator;
		$member->name = Input::get('name');
		$member->mail = Input::get('mail');
		$member->desc = Input::get('desc');
		$member->save();

		return Redirect::route('/');
	}
}


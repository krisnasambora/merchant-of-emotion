<?php 
	
class HomesiteController extends BaseController{

	public function insertNewSubscriber(){
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

	public function insertNewCollaborator(){
		$member = new Collaborator;
		$member->name = Input::get('name');
		$member->mail = Input::get('mail');
		$member->desc = Input::get('desc');
		$member->save();

		return Redirect::route('/');
	}
}


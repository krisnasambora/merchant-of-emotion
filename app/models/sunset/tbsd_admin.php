<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Tbsd_admin extends Eloquent implements UserInterface, RemindableInterface{

	protected $table = 'tbsd_admins';

	public function getAuthIdentifier()
	{
	    return $this->getKey();
	}

	public function getAuthPassword()
	{
	    return $this->password;
	}

	public function getReminderEmail()
	{
	    return $this->mail;
	}

	public function getRememberToken()
	{
	    return $this->remember_token;
	}

	public function setRememberToken($value)
	{
	    $this->remember_token = $value;
	}

	public function getRememberTokenName()
	{
	    return 'remember_token';
	}
}
<?php

class HomeController extends BaseController {

	public function home()
	{
		//$user = User::find(1)->username;

		//echo '<pre>' . print_r($user) . "</pre>";

		//Mail::send('emails.auth.test',  array('name' => 'Ashwini', 'project' => 'Center Management' ), function($message){
			//$message->to('ashgururaj@gmail.com','Ashwini')->subject('Welcome to center management');
		//});

		

		return View::make('home');
	}

}
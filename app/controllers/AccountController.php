<?php

class AccountController extends BaseController{

	public function getCreate(){
		return View::make('account.create');

	}

	public function postCreate(){

		$validator = Validator::make(Input::all(), 
			array(
				'email' 			=> 'required|max:50|email|unique:users',
				'username'			=> 'required|max:50|min:3|unique:users',
				'password' 			=> 'required|max:60|min:6',
				'password_again' 	=> 'required|same:password', 
			)

		);

		if($validator->fails()){
			return Redirect::route('account-create')
					->WithErrors($validator)
					->WithInput();
		}else{
			die('success');
		}

	}
}
<?php

Route::get('/', array(
	'as' 	=> 'home',
	'uses' 	=> 'HomeController@home' 
));

/*
	Unauthenticated group
*/

Route::group(array('before' => 'guest'),function(){	

	/*
		CSRF protection
	*/	
	Route::group(array('before' => 'csrf'), function() {

		/*
			User account management POST
		*/
		Route::post('/account/create', array(
			'as'  	=> 'account-create',
			'uses'	=> 'AccountController@postCreate'
		));


	});		

	/*
		User account management GET
	*/
	Route::get('/account/create', array(
		'as'  	=> 'account-create',
		'uses'	=> 'AccountController@getCreate'
	));

});
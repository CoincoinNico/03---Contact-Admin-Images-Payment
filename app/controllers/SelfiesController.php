<?php

class SelfiesController extends BaseController {

	// function __construct()
	// {
		
	// 	$this->filter('before', 'auth')->only(array('create'));
	// 	$this->filter('before', 'csrf')->on('post');
	// }

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		$selfies = Selfie::all();
		return View::make('selfies.index')->with('selfies', $selfies);
	}

	public function show($id)
	{
		$selfie = Selfie::find($id);
		return View::make('selfies.show')->with('selfie', $selfie);
	}

	public function add()
	{

	}

}
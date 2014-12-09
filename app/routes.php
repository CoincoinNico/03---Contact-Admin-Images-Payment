<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('pages.home');
});

Route::get('about', function()
{
	return View::make('pages.about');
});

Route::get('selfies','SelfiesController@index');
Route::get('selfies/new','SelfiesController@add');
Route::get('selfie/{id}', 'SelfiesController@show');

// CONNEXION DUN UTILISATEUR
// route to show the login form

Route::get('users/login', 'UsersController@login');
// route to process the form
Route::post('users/login', 'UsersController@login');
Route::get('user/{id}', 'UsersController@show');
Route::get('users/signup', 'UsersController@registration');
Route::post('users/signup', 'UsersController@create');
Route::get('users/logout', 'UsersController@logout');
Route::controller('users', 'UsersController');


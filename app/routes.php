<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
|
|	Ici vous pouvez créer de nouvelles routes, c'est à dire des chemins vers 
|	de nouvelles parties de votre site (login, signup, page about, page contact)
| Pour les chemins qui nécessitent de traiter de l'information (par exemple 
|	enregistrer un utilisateur dans la BDD), la bonne convention est de rediriger
| vers un controller et vers une action de ce controller via la route.
| C'est cette fonction du controller qui demandera le chargement de la vue.
*/

/*
|--------------------------------------------------------------------------
| LES PAGES STATIQUES
|--------------------------------------------------------------------------
|*/

// l'utilisateur www.monsite.com/
Route::get('/', function()
{
	// retourne le fichier views/pages/about.blade.php
	return View::make('pages.home');
});

// l'utilisateur demande www.monsite.com/about
Route::get('about', function()
{
	// retourne le fichier views/pages/about.blade.php
	return View::make('pages.about');
});
// l'utilisateur demande www.monsite.com/selfies
// on redirige vers le fichier Controller/SelfiesController.php
// et on demande le chargement de la fonction index

/*
|--------------------------------------------------------------------------
| CREATION DUN SELFIE
|--------------------------------------------------------------------------
|*/
Route::get('selfies','SelfiesController@index');
// CREATION
Route::get('selfies/new','SelfiesController@create');
Route::post('selfies/new','SelfiesController@store');
// READ
Route::get('selfie/{id}', 'SelfiesController@show');
// UPDATE
Route::get('selfie/{id}/edit', 'SelfiesController@edit');
Route::post('selfie/{id}/edit', 'SelfiesController@update');
// DELETE
Route::delete('selfie/{id}', 'SelfiesController@delete');



/*
|--------------------------------------------------------------------------
| CONNEXION DUN UTILISATEUR
|--------------------------------------------------------------------------
|*/

Route::get('users/login', 'UsersController@login');
// route to process the form
Route::post('users/login', 'UsersController@login');
Route::get('user/{id}', 'UsersController@show');
Route::get('users/signup', 'UsersController@create');
Route::post('users/signup', 'UsersController@store');
Route::get('users/logout', 'UsersController@logout');

/*
|--------------------------------------------------------------------------
| contact
|--------------------------------------------------------------------------
|*/


/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
|*/
Route::controller('admin/selfies', 'SelfiesController');


/*
|--------------------------------------------------------------------------
| STRIPE
|--------------------------------------------------------------------------
|*/

Route::get('pay', function(){
	return View::make('stripe');
});

Route::post('pay', 'ChargesController@payment');

Route::get('pay/success', function(){
	return View::make('pay.success');
});

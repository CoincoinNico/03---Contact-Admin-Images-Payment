<?php

class UsersController extends BaseController {

	//Affichage d'un utilisateur
	public function show($id)
	{
		$user = User::find($id);
		return View::make('users.show')->with('user', $user);
	}

	//Connexion d'un utilisateur
	public function login()
	{
		// On vérifie si un formulaire a été soumis
		if (Request::isMethod('post'))
		{
			//on récupère les données du formulaires dans un tableau
	    $userdata = array(
	    	'username' => Input::get('username'),
				'password' => Input::get('password')
  		);
  		//on vérifie si ces données permettent un login
  		if(Auth::attempt($userdata))
  		{
  			//alors on redirige vers les selfies en indiquant que la connexion est réussi
  			return Redirect::to('/selfies')->with('message', 'Connexion réussie !');
  		}
  		else
  		{
  			//sinon on reste sur le login, en disant ce qui ne va pas
  			return Redirect::to('users/login')->withErrors('login_errors', true)->withInput();
  		}
		}
		//si aucun formulaire n'a été soumis alors la personne a juste demandé l'URL de login
		else
		{
			return View::make('users.login');
		}
	}

	//insscription d'un utilisateur, il charge la page
	public function registration()
	{
		return View::make('users.registration');
	}

	//inscription d'un utilisateur, il envoie la demande
	public function create()
	{
		//on impose des contraintes aux données du formulaire
		$rules = array(
			'username' => array('required','unique:users','between:3,30'),
			'email' => array('required','unique:users'),
			'password' => array('required','min:5','confirmed'),
			'password_confirmation' => array('required')
		);
		//on vérifie si les conditions sont vérifiées avec les Inputs fournis
		$validator = Validator::make(Input::all(), $rules);

    if ($validator->fails())
    {
    	//si ce n'est pas le cas, on indique où sont les erreurs
      return Redirect::to('users/signup')->withErrors($validator)->withInput();
    }
    else {
    	//sinon on charge les données
    	$data = array(
	    	'username' => Input::get('username'),
				'email' => Input::get('email'),
				'password' => Hash::make(Input::get('password'))
    		);
    	//on crée un utilisateur avec cela, attention de bien laisser la possibilité de créer un utilisateur depuis le Model avec fillable
    	if(User::create($data))
    	{
    		Session::flash('message', 'Inscription terminée');
    	}
    }
    return Redirect::to('selfies');
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::to('/selfies')->with('message', 'A bientôt !');
	}

}
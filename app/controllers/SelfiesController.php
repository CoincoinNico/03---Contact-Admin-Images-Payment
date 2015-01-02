<?php

class SelfiesController extends BaseController {

	public function index()
	{
		// la variable $selfies sera accessible dans la vue index
		return View::make('selfies.index')->with('selfies', Selfie::all());
	}

	public function show($id)
	{
		// je retourne la vue associée, je pourrai appeler la variable $selfie
		return View::make('selfies.show')->with('selfie', Selfie::find($id));
	}

	public function edit($id)
	{
		// je retourne la vue associée, je pourrai appeler la variable $selfie
		return View::make('selfies.edit')->with('selfie', Selfie::find($id));
	}

	public function update($id)
	{
		$rules = array(
			'title' => array('required','min:5'),
			'price' => array('required')
		);
		$validator = Validator::make(Input::all(), $rules);

    if ($validator->fails())
    {
    	// si ce n'est pas le cas, on indique où sont les erreurs
      return Redirect::to('selfies/'. $id .'edit')->withErrors($validator)->withInput();
    }
    else 
    {
    	// je récupère le selfie
    	$selfie = Selfie::find($id);
    	// je change la valeur du champ titre
      $selfie-> title = Input::get('title');
      $selfie-> price = Input::get('price');
      // je le sauvegarde
      $selfie->save();
      // j'utilise les messages flash et je stocke Selfie dans 'message'
  		Session::flash('message', 'Selfie updaté');
  		return Redirect::to('selfies');
  	}
	}

	public function create() {
		return View::make('selfies.create');
	}

	public function store()
	{
		//on impose des contraintes aux données du formulaire
		$rules = array(
			'title' => array('required','min:5'),
			'price' => array('required')
		);
		$validator = Validator::make(Input::all(), $rules);

    if ($validator->fails())
    {
    	//si ce n'est pas le cas, on indique où sont les erreurs
      return Redirect::to('selfies/new')->withErrors($validator)->withInput();
    }
    else 
    {
    	$data = array(
    		'title' => Input::get('title'),
    		'user_id' => Auth::user()-> id,
    		'picture' => Input::file('picture'),
    		'price' => Input::get('price')
    	);
    	Selfie::create($data);
    	Session::flash('message', 'Selfie ajouté');
    	return Redirect::to('selfies');
    }
	}

	public function delete($id)
	{
		// je récupère le selfie qu'on veut montrer grâce à son id
		$selfie = Selfie::find($id);
		// je le supprime
		$selfie->delete();
		Session::flash('message', 'Selfie supprimé');
    return Redirect::to('selfies');
	}

}
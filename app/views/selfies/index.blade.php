@extends('layouts.application')
@section('content')
@include('layouts.nav')
<div class="container">
	<div class="main-page">
		<!-- Je vérifie s'il y a un paramètre s'appelant 'message' -->
		@if(Session::has('message'))
			<!-- Je le récupère et je l'affiche -->
			<div class="alert">{{Session::get('message')}}</div>
		@endif

		<!-- Si la variable selfies n'est pas vide -->
		@if ($selfies)
			<!-- alors j'itère sur le tableau des selfies -->
			@foreach ($selfies as $selfie)
				<!-- J'affiche le titre du selfie et j'inclus le titre dans un lien -->
				<!-- Je passe au lien la variable $selfie-> id ce qui veut dire que le controller
				pourra récupérer l'id, cette information lui sera envoyée ! -->
				<h2>{{ HTML::linkAction('SelfiesController@show', $selfie-> title, array($selfie-> id), array('class' => 'selfie')) }}</h2>
				<p>ajouté par {{ HTML::linkAction('UsersController@show', $selfie-> user-> email, array($selfie-> user-> id)) }}</p>
				
				@if(Auth::check() && Auth::User()->id == $selfie->user_id)
					<span>{{ HTML::linkAction('SelfiesController@edit', 'Editer', array($selfie-> id), array('class' => 'selfie')) }}</span>
					{{Form::open(array('action' => array('SelfiesController@delete', $selfie->id), 'class'=>'form-delete', 'method' => 'DELETE'))}}
            {{ Form::submit('Supprimer ce selfie', array('class' => 'btn btn-link')) }}
          {{ Form::close() }}
				@endif

			@endforeach
		@endif
	</div>
</div>

@endsection
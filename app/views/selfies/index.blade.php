@extends('layouts.application')
@section('content')
@include('layouts.nav.navOther')
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
			<div id="selfies" class="js-masonry" data-masonry-options='{ "itemSelector": ".box" }'>
				@foreach ($selfies as $selfie)
					<!-- J'affiche le titre du selfie et j'inclus le titre dans un lien -->
					<!-- Je passe au lien la variable $selfie-> id ce qui veut dire que le controller
					pourra récupérer l'id, cette information lui sera envoyée ! -->
					<div class="box panel panel-default">
						<a href="/selfie/{{ $selfie-> id }}"><img src="{{{ $selfie-> picture-> url('prompt') }}}" class="img-thumbnail selfie-pic"></a>
						<div class="panel-body">
							<h2>{{ HTML::linkAction('SelfiesController@show', $selfie-> title, array($selfie-> id), array('class' => 'selfie-title')) }}</h2>
							<br>
							<p>ajouté par {{ HTML::linkAction('UsersController@show', $selfie-> user-> email, array($selfie-> user-> id)) }}</p>
						
							@if(Auth::check() && Auth::User()->id == $selfie->user_id)
								<span>{{ HTML::decode(HTML::linkAction('SelfiesController@edit', '<i class="fa fa-pencil-square-o"></i>Editer', array($selfie-> id), array('class' => 'selfie'))) }}</span>
								{{Form::open(array('action' => array('SelfiesController@delete', $selfie->id), 'class'=>'form-delete', 'method' => 'DELETE'))}}
			          {{ Form::button('<i class="fa fa-times"></i>Supprimer', array('type' => 'submit', 'class' => 'btn btn-link')) }}
			          {{ Form::close() }}
							@endif
						</div>
					</div>
				@endforeach
			</div>
		@endif
	</div>
</div>

@endsection

{{ HTML::script('js/masonry.js') }}

<script type="text/javascript">
	var selfies = document.querySelector('#selfies');
	var msnry = new Masonry( selfies, {
	  // options
	  itemSelector: '.box'
	});

</script>
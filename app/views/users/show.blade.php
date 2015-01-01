@extends('layouts.application')
@section('content')
@include('layouts.nav.navOther')
<div class="container">
	<div class="main-page">
		<h1>Les selfies de {{$user-> username}}</h1>
		@foreach ($user->selfies as $selfie)
			<h2>{{ HTML::linkAction('SelfiesController@show', $selfie-> title, array($selfie-> id)) }}</h2>
			<span><i class="fa fa-pencil-square-o"></i>{{ HTML::linkAction('SelfiesController@edit', 'Editer', array($selfie-> id), array('class' => 'selfie')) }}</span>
			{{Form::open(array('action' => array('SelfiesController@delete', $selfie->id), 'class'=>'form-delete', 'method' => 'DELETE'))}}
      {{ Form::submit('Supprimer ce selfie', array('class' => 'btn btn-link')) }}
      {{ Form::close() }}
		@endforeach
	</div>
</div>
@endsection
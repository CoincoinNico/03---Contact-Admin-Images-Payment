@extends('layouts.application')
@section('content')
@include('layouts.nav')
<div class="container">
	<div class="main-page">
		<h1>{{$user->username}}</h1>
		@foreach ($user->selfies as $selfie)
		<h2>{{ HTML::linkAction('SelfiesController@show', $selfie-> title, array($selfie-> id)) }}</h2>
		<p>ajouté par {{ HTML::linkAction('UsersController@show', $selfie-> user-> username, array($selfie-> user-> id)) }}</p>
		@endforeach
	</div>
</div>

@endsection
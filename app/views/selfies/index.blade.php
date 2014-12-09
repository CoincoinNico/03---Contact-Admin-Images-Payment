@extends('layouts.application')
@section('content')
@include('layouts.nav')
<div class="container">
	<div class="main-page">
		@if(Session::has('message'))
			<div class="alert">{{Session::get('message')}}</div>
		@endif

		@if ($selfies)
		@foreach ($selfies as $selfie)
		<h2>{{ HTML::linkAction('SelfiesController@show', $selfie-> title, array($selfie-> id)) }}</h2>
		<p>ajouté par {{ HTML::linkAction('UsersController@show', $selfie-> user-> username, array($selfie-> user-> id)) }}</p>
		@endforeach
		@endif
	</div>
</div>

@endsection
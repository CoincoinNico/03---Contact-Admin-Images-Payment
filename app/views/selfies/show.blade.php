@extends('layouts.application')
@section('content')
@include('layouts.nav')
<div class="container">
	<div class="main-page">
		<h2>{{ $selfie-> title }}</h2>
		<p>ajouté par {{ HTML::linkAction('UsersController@show', $selfie-> user-> username, array($selfie-> user-> id)) }}</p>
	</div>
</div>

@endsection
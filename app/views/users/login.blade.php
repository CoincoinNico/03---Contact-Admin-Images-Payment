@extends('layouts.application')
@section('content')
@include('layouts.nav.navOther')
<div class="container">
	<div class="main-page">
		<div class="form">

			{{Form::open(array('url' => '/users/login'))}}
			{{Form::token()}}

			{{Form::text('username', '', array('class'=>'form-control', 'placeholder'=>'Votre pseudo'))}}
			{{$errors->first('username', '<span class="has-error">:message</span>')}}
			<br/>
			<br/>
			{{Form::password('password', array('class'=>'form-control', 'placeholder'=>'Votre mot de passe'))}}
			{{$errors->first('password', '<span class="has-error">:message</span>')}}
			<br/>
			<br/>

			{{Form::submit('Login', array('class'=>'btn btn-primary'))}}
			{{Form::close()}}
		</div>
	</div>
</div>

@endsection
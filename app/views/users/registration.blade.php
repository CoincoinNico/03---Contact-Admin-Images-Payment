@extends('layouts.application')
@section('content')
@include('layouts.nav.navOther')
<div class="container">
	<div class="main-page">
		<div class="form">

			{{Form::open(array('url' => '/users/signup'))}}
			{{Form::token()}}

			{{Form::text('username', '', array('class'=>'form-control', 'placeholder'=>'Votre pseudo'))}}
			{{$errors->first('username', '<span class="has-error">:message</span>')}}
			<br/>
			<br/>
			{{Form::text('email', '', array('class'=>'form-control', 'placeholder'=>'Votre email'))}}
			{{$errors->first('email', '<span class="has-error">:message</span>')}}
			<br/>
			<br/>
			{{Form::file('avatar', array('class'=>'form-control', 'placeholder'=>'Une photo de vous'))}}
			<br/>
			<br/>
			{{Form::password('password', array('class'=>'form-control', 'placeholder'=>'Votre mot de passe'))}}
			{{$errors->first('password', '<span class="has-error">:message</span>')}}
			<br/>
			<br/>
			{{Form::password('password_confirmation', array('class'=>'form-control', 'placeholder'=>'Confirmer votre mot de passe'))}}
			{{$errors->first('password_confirmation', '<span class="has-error">:message</span>')}}
			<br/>
			<br/>

			{{Form::submit('SignUp', array('class'=>'btn btn-primary'))}}
			{{Form::close()}}
		</div>
	</div>
</div>

@endsection
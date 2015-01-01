@extends('layouts.application')
@section('content')
@include('layouts.nav')
<div class="container">
	<div class="main-page">
	<h2>Editer {{ $selfie->title }}</h2>
    {{Form::open(array('action' => array('SelfiesController@update', $selfie->id), 'method' => 'POST'))}}
    {{Form::token()}}

    {{Form::text('title', $selfie->title, array('class'=>'form-control'))}}
    {{$errors->first('title', '<span class="has-error">:message</span>')}}
    <br/>
    <br/>

    {{Form::submit('Editer le selfie', array('class'=>'btn btn-primary'))}}
    {{Form::close()}}
	</div>
</div>

@endsection
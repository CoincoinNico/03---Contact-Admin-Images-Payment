@extends('layouts.application')
@section('content')
@include('layouts.nav.navOther')
<div class="container">
	<div class="main-page">
		<h2>Ajouter un selfie</h2>
    {{Form::open(array('action' => 'SelfiesController@store', 'files' => true))}}
    {{Form::token()}}

    {{Form::text('title', '', array('class'=>'form-control', 'placeholder'=>'Le titre de votre selfie'))}}
    {{$errors->first('title', '<span class="has-error">:message</span>')}}
    <br/>
    <br/>
    {{Form::text('price', '', array('class'=>'form-control', 'placeholder'=>'Le prix de vente de votre selfie'))}}
    {{$errors->first('title', '<span class="has-error">:message</span>')}}
    <br/>
    <br/>
    {{ Form::file('picture') }}
    <br/>
    <br/>
    {{Form::submit('Ajouter le selfie', array('class'=>'btn btn-primary'))}}
    {{Form::close()}}
	</div>
</div>

@endsection
@extends('layout')

@section('container')
	<h1>Bienvenue sur présences</h1>
	<div class="connect">
		<h2>Connectez-vous</h2>
		{{ Form::open(array( 'url' => 'login' , 'method' => 'POST' )) }}
			{{ Form::label('name','Votre nom'); }}
			{{ Form::text('name', '', array('placeholder' => 'Votre nom')); }}
			{{ Form::label('Votre mot de passe','Votre mot de passe'); }}
			{{ Form::password('password'); }}
			{{ Form::submit('Se connecter'); }}
		{{ Form::close() }}
	</div>
@stop
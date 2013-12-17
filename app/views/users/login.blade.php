@extends('layout')

@section('container')
	<div class="login">
		<h1>Bienvenue sur presences</h1>
		<p class="legend">L'application pour les profs réalisée par les étudiants</p>
		<div class="connect">
			<h2>Connectez-vous</h2>
			{{ Form::open(array( 'url' => 'login' , 'method' => 'POST' )) }}
				{{ Form::label('name','Votre nom'); }}
				{{ Form::text('name', '', array('placeholder' => 'Votre nom')); }}
				{{ Form::label('Votre mot de passe','Votre mot de passe', array('placeholder' => 'Votre mot de passe')); }}
				{{ Form::password('password'); }}
				{{ Form::submit('Se connecter', array('class' => 'submit')); }}
			{{ Form::close() }}
		</div>
	</div>
@stop
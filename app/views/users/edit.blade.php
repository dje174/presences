@extends('layout')

@section('container')

Modifier mon profil ({{ Auth::user()->first_name, Auth::user()->name}})

{{ Form::model(Auth::user(), array('method' => 'PATCH', 'files' => true, 'route' => array('users.update', Auth::user()->id))) }}
	{{ Form::label('Votre prénom','Votre prénom') }}
	{{ Form::text('first_name', '', array('placeholder' => Auth::user()->first_name)); }}
	{{ Form::label('Votre nom','Votre nom') }}
	{{ Form::text('name', '', array('placeholder' => Auth::user()->name)); }}
	{{ Form::label('Votre email','Votre email') }}
	{{ Form::text('email', '', array('placeholder' => Auth::user()->email)); }}
	{{ Form::label('Votre nouveau mot de passe','Votre nouveau mot de passe') }}
	{{ Form::password('password'); }}
	{{ Form::submit('Valider la modification') }}
{{ Form::close() }}

@stop
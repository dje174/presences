@extends('layout')

@section('container')
<section class="main">
	<h2>Modifier mon profil ({{ Auth::user()->first_name, Auth::user()->name}})</h2>
	{{ Form::open( array('method' => 'PATCH', 'route' => array('users.update', Auth::user()->slug))) }}
		{{ Form::label('Votre prénom','Votre prénom') }}
		{{ Form::text('first_name', Auth::user()->first_name, array('class'=>'text')); }}
		{{ $errors->first('first_name','<span class=error>:message</span>'); }}
		{{ Form::label('Votre nom','Votre nom') }}
		{{ Form::text('name', Auth::user()->name, array('class'=>'text')); }}
		{{ $errors->first('name','<span class=error>:message</span>'); }}
		{{ Form::label('Votre email','Votre email') }}
		{{ Form::text('email', Auth::user()->email, array('class'=>'text')); }}
		{{ $errors->first('email','<span class=error>:message</span>'); }}
		{{ Form::label('Votre nouveau mot de passe','Votre nouveau mot de passe') }}
		{{ Form::password('password', array('class'=>'text')); }}
		{{ $errors->first('password','<span class=error>:message</span>'); }}
		{{ Form::submit('Valider la modification', array('class'=>'validation')) }}
	{{ Form::close() }}
</section>

@stop
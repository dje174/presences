@extends('layout')

@section('container')
<section class="main">
	<div class="container">
		<h2>Modifier mon profil ({{ Auth::user()->first_name, Auth::user()->name}})</h2>
		{{ Form::open( array('method' => 'PATCH', 'route' => array('users.update', Auth::user()->slug), 'class'=>'col-md-6')) }}
			<div class="form-group">
				{{ Form::label('Votre nom','Votre nom') }}
				{{ Form::text('name', Auth::user()->name, array('class'=>'form-control')); }}
				{{ $errors->first('name','<span class=error>:message</span>'); }}
			</div>
			<div class="form-group">
				{{ Form::label('Votre prénom','Votre prénom') }}
				{{ Form::text('first_name', Auth::user()->first_name, array('class'=>'form-control')); }}
				{{ $errors->first('first_name','<span class=error>:message</span>'); }}
			</div>
			<div class="form-group">
				{{ Form::label('Votre email','Votre email') }}
				{{ Form::text('email', Auth::user()->email, array('class'=>'form-control')); }}
				{{ $errors->first('email','<span class=error>:message</span>'); }}
			</div>
			<div class="form-group">
				{{ Form::label('Votre nouveau mot de passe','Votre nouveau mot de passe') }}
				{{ Form::password('password', array('class'=>'form-control')); }}
				{{ $errors->first('password','<span class=error>:message</span>'); }}
			</div>
			{{ Form::submit('Valider la modification', array('class'=>'btn btn-success')) }}
		{{ Form::close() }}
	</div>
</section>

@stop
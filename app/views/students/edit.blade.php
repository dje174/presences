@extends('layout')
@section('container')
	<section class="main">
		<h2>Modifier le profil de {{$student->first_name.' '.$student->name}}</h2>
		{{ Form::open(array('method' => 'PATCH', 'route' => array('students.update' , $student->slug))) }}
			{{ Form::label('first_name','Prénom :') }}
			{{ Form::text('first_name', $student->first_name, array('class'=>'text'))}}
			{{ Form::label('name','Nom :') }}
			{{ Form::text('name', $student->name, array('class'=>'text'))}}
			{{ Form::label('email','Email :') }}
			{{ Form::text('email', $student->email, array('class'=>'text'))}}
			{{ Form::label('level','Degré :') }}
			{{ Form::select('level', array(
				'1' => 'première année infographie',
				'2' => 'deuxième année infographie',
				'3' => 'troisème année infographie'
			))}}
			{{ Form::submit('Valider la modification', array('class'=>'validation')) }}
		{{ Form::close() }}
	</section>
@stop
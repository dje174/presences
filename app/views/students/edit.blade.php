@extends('layout')
@section('container')
	<section class="main">
		<h2>Modifier le profil de {{$student->first_name.' '.$student->name}}</h2>
		{{ Form::open(array('method' => 'PATCH', 'route' => array('students.update' , $student->slug))) }}
			{{ Form::label('first_name','Prénom :') }}
			{{ Form::text('first_name', '', array('placeholder' => $student->first_name,'class'=>'text'))}}
			{{ Form::label('name','Nom :') }}
			{{ Form::text('name', '', array('placeholder' => $student->name,'class'=>'text'))}}
			{{ Form::label('email','Email :') }}
			{{ Form::text('email', '', array('placeholder' => $student->email,'class'=>'text'))}}
			{{ Form::label('level','Degré :') }}
			{{ Form::select('level', array(
				'première année infographie' => 'première année infographie',
				'deuxième année infographie' => 'deuxième année infographie',
				'troisème année infographie' => 'troisème année infographie'
			))}}
			{{ Form::submit('Valider la modification', array('class'=>'validation')) }}
		{{ Form::close() }}
	</section>
@stop
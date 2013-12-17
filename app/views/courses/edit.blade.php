@extends('layout')
@section('container')
	<section class="main">
		<h2>Modifier le cours de {{ $course->name }}</h2>
		{{ Form::open(array('method' => 'PATCH', 'route' => array('courses.update' , $course->slug))) }}
		{{ Form::label('name','Nom du cours :') }}
		{{ Form::text('name', $course->name, array('class'=>'text')) }}
		{{ Form::label('description','Description du cours :') }}
		{{ Form::text('description', $course->description, array('id'=>'inputDescription')) }}
		{{ Form::label('level','Degré :') }}
			{{ Form::select('level', array(
				'1' => 'première année infographie',
				'2' => 'deuxième année infographie',
				'3' => 'troisème année infographie'
			))}}
		{{ Form::label('year','Année académique :') }}
			{{ Form::select('year', array(
				'1' => '2009-2010',
				'2' => '2010-2011',
				'3' => '2011-2012',
				'4' => '2012-2013',
				'5' => '2013-2014',
				'6' => '2014-2015'
			))}}
		{{ Form::submit('Valider la modification', array('class'=>'validation')) }}
		{{ Form::close() }}
	</section>
@stop
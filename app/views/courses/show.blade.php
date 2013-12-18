@extends('layout')

@section('container')
	<section class="main">
		<h2>Cours de {{ $course->name }}</h2>
		<div class="change">
			{{ link_to_route('courses.edit','Modifier le cours', $course->slug,array('class'=>'modify')) }}
			{{ Form::open(array('method' => 'DELETE', 'route' => array('courses.destroy' , $course->slug))) }}
				{{ Form::submit('Supprimer',array('class'=>'delete')) }}
			{{ Form::close() }}
		</div>
		<div class="informationsCourse">
			<label for="description">Description du cours: <span>{{ $course->description }}</span></label>
			<label for="level">Cours donné en: <span>{{ $course->level->name }}</span></label>
			<label for="year">Année: <span>{{ $course->year->name }}</span></label>
		</div>
	</section>
@stop
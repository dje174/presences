@extends('layout')

@section('container')
	<section class="main">
		<div class="container">
			<h2>Cours de {{ $course->name }}</h2>
			<div class="change">
				{{ link_to_route('courses.edit','Modifier le cours', $course->slug,array('class'=>'btn btn-primary leftBtn')) }}
				{{ Form::open(array('method' => 'DELETE', 'route' => array('courses.destroy' , $course->slug))) }}
					{{ Form::submit('Supprimer',array('class'=>'btn btn-danger leftBtn')) }}
				{{ Form::close() }}
			</div>
			<div class="informationsCourse">
			<h3>Informations sur le cours</h3>
				<div class="content">
					<label for="description">Description du cours: </label>
					<span>{{ $course->description }}</span>
				</div>
				<div class="content">
					<label for="level">Cours donné en: </span></label>
					<span>{{ $course->level->name }}
				</div>
				<div class="content">
					<label for="year">Année: </span></label>
					<span>{{ $course->year->name }}
				</div>
			</div>
		</div>
	</section>
@stop
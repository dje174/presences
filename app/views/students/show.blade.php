@extends('layout')

@section('container')
	<section class="main">
		<h2>Profil de {{ $student->first_name.' '.$student->name }} </h2>
		<div class="change">
			{{ link_to_route('students.edit','Modifier le profil', $student->slug,array('class'=>'modify')) }}
			{{ Form::open(array('method' => 'DELETE', 'route' => array('students.destroy' , $student->slug))) }}
				{{ Form::submit('Supprimer',array('class'=>'delete')) }}
			{{ Form::close() }}
		</div>
		<div class="informationsStudent">
			{{ HTML::image('img/UserPhoto.png', 'Photo de profil de l\'élève',array('class' => 'photoProfilUser')) }}
			<label for="prenom">Prénom: <span>{{ $student->first_name }}</span></label>
			<label for="nom">Nom: <span>{{ $student->name }}</span></label>
			<label for="email">Email: <span>{{ $student->email }}</span></label>
			<label for="level">Etudiant en: <span>{{ $student->level->name }}</span></label>
		</div>
	</section>
@stop
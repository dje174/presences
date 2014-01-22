@extends('layout')

@section('container')
	<section class="main">
		<div class="container">
			<h2>Profil de {{ $student->first_name.' '.$student->name }} </h2>
				<div class="changes">
					{{ link_to_route('students.edit','Modifier le profil', $student->slug,array('class'=>'btn btn-primary leftBtn')) }}
					{{ Form::open(array('method' => 'DELETE', 'route' => array('students.destroy' , $student->slug))) }}
						{{ Form::submit('Supprimer',array('class'=>'btn btn-danger leftBtn')) }}
					{{ Form::close() }}
				</div>
			<div class="informationsStudent">
				<h3>Informations</h3>
				@if($student->photo)
                    <img src="/photoProfilStudents/{{ $student->photo }}" alt="Photo de l'étudiant" class="img-thumbnail">
                @else 
                    <img src="/img/UserPhoto.png" alt="Photo déscriptive du cercle" class="img-thumbnail pull-left">
                @endif
                <div class="content-informations">
                	<div class="content">
						<label for="prenom">Prénom: </label>
						<span>{{ $student->first_name }}</span>
					</div>
					<div class="content">
						<label for="nom">Nom: </label>
						<span>{{ $student->name }}</span>
					</div>
					<div class="content">
						<label for="email">Email: </label>
						<span>{{ $student->email }}</span>
					</div>
					<div class="content">
						<label for="level">Etudiant en: </label>
						<span>{{ $student->level->name }}</span>
					</div>
				</div>
			</div>
		</div>
	</section>
@stop
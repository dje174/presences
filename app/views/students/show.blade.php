@extends('layout')

@section('container')
	<section class="main">
		<h1>Fiche de </h1>
		<div class="informationsStudent">
			<label for="prenom">Prénom: {{ $student->first_name }}</label>
			<label for="nom">Nom: {{ $student->name }}</label>
			<label for="email">Email: {{ $student->email }}</label>
			<label for="year">Etudiant en:{{ $student->level->name }}
			</label>
		</div>
	</section>
@stop
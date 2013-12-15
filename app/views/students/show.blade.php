@extends('layout')

@section('container')
	<h1>Fiche de {{ $student->first_name.' '.$student->name }}</h1>
	<div class="informationsStudent">
		<label for="prenom">Prénom: {{ $student->first_name }}</label>
		<label for="nom">Nom: {{ $student->name }}</label>
		<label for="email">Email: {{ $student->email }}</label>
		<label for="year">Etudiant en:</label>
	</div>
	

@stop
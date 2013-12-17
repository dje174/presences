@extends('layout')

@section('container')
<section class="main">
	Mon profil ({{ Auth::user()->first_name, Auth::user()->name}})
	{{ link_to_route('users.edit','Modifier le profil', Auth::user()->slug) }}
	<p>Prénom: {{ Auth::user()->first_name }}</p>
	<p>Nom: {{ Auth::user()->name }}</p>
	<p>Email: {{ Auth::user()->email }}</p>
</section>
@stop
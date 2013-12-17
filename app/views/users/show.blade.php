@extends('layout')

@section('container')
<section class="main">
	<h2>Mon profil ({{ Auth::user()->first_name, Auth::user()->name}})</h2>
	{{ link_to_route('users.edit','Modifier le profil', Auth::user()->slug) }}
	<label>Prénom: <span>{{ Auth::user()->first_name }}</span></label>
	<label>Nom: <span>{{ Auth::user()->name }}</span></label>
	<label>Email: <span>{{ Auth::user()->email }}</span></label>
	<?php
		$tc = User::with('courses')->find(Auth::user()->id);
		echo '<label>Mes cours :';
		echo '<br>';
		foreach ($tc->courses as $course) {
			echo ' '.link_to_route('courses.show',$course->name,$course->slug);
			echo '<br>';
		}
		echo '</label>';
	?>
</section>
@stop
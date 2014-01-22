@extends('layout')

@section('container')
<section class="main">
	<div class="container">
		<h2>Mon profil ({{ Auth::user()->first_name, Auth::user()->name}}) {{ link_to_route('users.edit','Modifier le profil', Auth::user()->slug, ['class' => 'btn btn-primary']) }}</h2>
		<div class="row">
			<div class="col-md-4">
				<h3>Informations</h3>
				<label>Prénom: <span>{{ Auth::user()->first_name }}</span></label>
				<label>Nom: <span>{{ Auth::user()->name }}</span></label>
				<label>Email: <span>{{ Auth::user()->email }}</span></label>
			</div>
			<div class="col-md-4">
				<h3>Mes cours</h3>
				<?php
					$tc = User::with('courses')->find(Auth::user()->id);
					foreach ($tc->courses as $course) {
						echo ' '.link_to_route('courses.show',$course->name,$course->slug);
						echo '<br>';
					}
					echo '</label>';
				?>
			</div>	
			<div class="col-md-4">
				<h3>Mes élèves</h3>

				{{ link_to_route('students.index','Voir mes élèves') }}
			</div>
		</div>
	</div>
</section>
@stop
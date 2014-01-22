@extends('layout')

@section('container')
<section class="main">
	<div class="container">
		<?php
			$tc = User::with('courses')->find(Auth::user()->id);
			echo '<h2>Mes élèves (';
			echo Auth::user()->first_name;
			echo ' ';
			echo Auth::user()->name;
			echo ') : </h2>';
		?>
		@if (Auth::check())
		    <a href="{{ route('students.create') }}" title="Ajouter un élève" class="create">
		    	{{ Form::submit('Ajouter un élève', ['class' => 'btn btn-success']) }}
		    </a>
		@endif
		<div class="row">
				@foreach ($tc->courses as $course)
					<div class="col-md-6 students">
						<h3>{{ $course->name}} <span class="caret"></span></h3>
						<table class="table table-hover">
				    		<thead>
				    			<tr>
				    				<th>Prénom</th>
				                    <th>Nom</th>
				    				<th>Année</th>
				                    <th>Voir la fiche</th>
				    			</tr>
				    		</thead>
				    		<tbody>
				    			@foreach($course->students as $student)
								<tr>
									<td>
										{{$student->first_name}}
									</td>
									<td>
										{{$student->name}}
									</td>
									<td>
										{{$student->level->name}}
									</td>
									<td>
										{{ link_to_route('students.show', 'Voir la fiche', $student->slug, ['class' => 'btn btn-primary']) }}
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				@endforeach
		</div>
	</div>
</section>

@stop
@extends('layout')

@section('container')
	<div class="container">
		<?php
			$tc = User::with('courses')->find(Auth::user()->id);
			echo '<h2>Mes cours (';
			echo Auth::user()->first_name;
			echo ' ';
			echo Auth::user()->name;
			echo ') : </h2>';
		?>
		@if (Auth::check())
		    <a href="{{ route('courses.create') }}" title="Créer un cours" class="create">
		    	{{ Form::submit('Créer un cours', array('class'=>'btn btn-success')) }}
		    </a>
		@endif
		<div class="table-responsive">
			<table class="table table-hover">
    		<thead>
    			<tr>
    				<th>Cours</th>
                    <th>Professeur</th>
    				<th>Description</th>
                    <th>Année</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
    			</tr>
    		</thead>
    		<tbody>
    			@foreach ($tc->courses as $course)
    				<tr>
                        <td>
                        	{{ link_to_route('courses.show', $course->name, $course->slug) }}
                        </td>
                        <td>
							{{ link_to('users/'.Auth::user()->slug, Auth::user()->first_name.' '.Auth::user()->name) }}
                        </td>
                        <td>{{{ $course->description }}}</td>
    					<td>{{{ $course->year->name }}}</td>
                        <td>{{ link_to_route('courses.edit', 'Modifier', array($course->slug), array('class' => 'btn btn-primary')) }}</td>
                        <td>
                            {{ Form::open(array('method' => 'DELETE', 'route' => array('courses.destroy', $course->slug))) }}
                                {{ Form::submit('Supprimer', array('class' => 'btn btn-danger')) }}
                            {{ Form::close() }}
                        </td>
    				</tr>
    			@endforeach
    		</tbody>
    	</table>
		</div>
	</div>
@stop
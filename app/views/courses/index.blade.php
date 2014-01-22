@extends('layout')

@section('container')
<section class="main">
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
    	{{ Form::submit('Créer un cours', array('class'=>'creation')) }}
    </a>
@endif
<table>
@foreach ($tc->courses as $course)
	<thead>
		<td>
			@foreach($years as $year)
			{{'<h3>'.$year->name.'</h3>';}}
			@endforeach
		</td>
	</thead>
	<tbody>
		<tr>
			<td>
				{{link_to_route('courses.show',$course->name,$course->slug);}}
			</td>
		</tr>
		
	</tbody>
	
@endforeach
</table>
</section>
@stop
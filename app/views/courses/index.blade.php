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
<?php
	foreach ($tc->courses as $course) {
		echo link_to_route('courses.show',$course->name,$course->slug);
		echo '<br>';
	}
?>
</section>
@stop
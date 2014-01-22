@extends('layout')

@section('container')
<section class="main">
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
    	{{ Form::submit('Ajouter un élève', array('class'=>'creation')) }}
    </a>
@endif
<?php
	foreach ($tc->courses as $course) {
		echo '<h3>'.$course->name.'</h3>';
		foreach ($course->getCollection()->students as $student){
			echo link_to_route('students.show',$student->first_name.' '.$student->name.' ('.$student->level->name.')',$student->slug);
			echo '<br>';
		}
	}
?>
</section>

@stop
@extends('layout')

@section('container')
<?php
	$tc = User::with('courses')->find(Auth::user()->id);
	echo '<h2>Mes élèves (';
	echo Auth::user()->first_name;
	echo ' ';
	echo Auth::user()->name;
	echo ') : </h2>';
	foreach ($tc->courses as $course) {
		foreach ($course->students as $student){
			echo link_to_route('students.show',$student->name.' '.$student->first_name,$student->slug);
			echo '<br>';
		}
	}
?>

@stop
@extends('layout')

@section('container')
<?php
	$tc = User::with('courses')->find(Auth::user()->id);
	echo 'Mes élèves (';
	echo Auth::user()->first_name;
	echo ' ';
	echo Auth::user()->name;
	echo ') : ';
	echo '<br>';
	foreach ($tc->courses as $course) {
		foreach ($course->students as $student){
			echo link_to_route('students.show',$student->first_name.' '.$student->name,$student->slug);
			echo '<br>';
		}
	}
?>

@stop
@extends('layout')

@section('container')
<?php
	$tc = User::with('courses')->find(Auth::user()->id);
	echo 'Mes cours (';
	echo Auth::user()->first_name;
	echo ' ';
	echo Auth::user()->name;
	echo ') : ';
	echo '<br>';
	foreach ($tc->courses as $course) {
		echo link_to_route('courses.show',$course->name,$course->slug,$course->id);
		echo '<br>';
	}
?>

@stop
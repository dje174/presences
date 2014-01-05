@extends('layout')
@section('container')
	<section class="main">
		<h2>Modifier le cours de {{ $course->name }}</h2>
		{{ Form::open(array('method' => 'PATCH', 'route' => array('courses.update' , $course->slug))) }}
		{{ Form::label('name','Nom du cours :') }}
		{{ Form::text('name', $course->name, array('class'=>'text')) }}
		{{ $errors->first('name','<span class=error>:message</span>'); }}
		{{ Form::label('description','Description du cours :') }}
		{{ Form::text('description', $course->description, array('id'=>'inputDescription')) }}
		{{ $errors->first('description','<span class=error>:message</span>'); }}
		{{ Form::label('level','Degré :') }}
		<select name="level" id="level">
				@foreach($levels as $level)
                    <option <?php if($course->level->id === $level->id){ echo('selected'); } ?> value="{{ $level->id }}">{{{ $level->name }}}</option>
            	@endforeach
		</select>
		{{ Form::label('year','Année académique :') }}
		<select name="level" id="level">
				@foreach($years as $year)
                    <option <?php if($course->year->id === $year->id){ echo('selected'); } ?> value="{{ $year->id }}">{{{ $year->name }}}</option>
            	@endforeach
		</select>
		{{ Form::submit('Valider la modification', array('class'=>'validation')) }}
		{{ Form::close() }}
	</section>
@stop
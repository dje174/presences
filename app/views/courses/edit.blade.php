@extends('layout')
@section('container')
	<section class="main">
		<div class="container">
			<h2>Modifier le cours de {{ $course->name }}</h2>
			{{ Form::open(array('method' => 'PATCH', 'route' => array('courses.update' , $course->slug), 'class' => 'col-md-6')) }}
			<div class="form-group">
				{{ Form::label('name','Nom du cours :') }}
				{{ Form::text('name', $course->name, array('class'=>'form-control')) }}
				{{ $errors->first('name','<span class=error>:message</span>'); }}
			</div>
			<div class="form-group">
				{{ Form::label('description','Description du cours :') }}
				{{ Form::text('description', $course->description, array('class'=>'form-control')) }}
				{{ $errors->first('description','<span class=error>:message</span>'); }}
			</div>
			<div class="form-group">
				{{ Form::label('level','Degré :') }}
				<select name="level_id" id="level_id" class="form-control">
						@foreach($levels as $level)
		                    <option <?php if($course->level->id === $level->id){ echo('selected'); } ?> value="{{ $level->id }}">{{{ $level->name }}}</option>
		            	@endforeach
				</select>
			</div>
			<div class="form-group">
				{{ Form::label('year','Année académique :') }}
				<select name="year_id" id="year_id" class="form-control">
						@foreach($years as $year)
		                    <option <?php if($course->year->id === $year->id){ echo('selected'); } ?> value="{{ $year->id }}">{{{ $year->name }}}</option>
		            	@endforeach
				</select>
			</div>
			{{ Form::submit('Valider la modification', array('class'=>'btn btn-success')) }}
			{{ Form::close() }}
		</div>
	</section>
@stop
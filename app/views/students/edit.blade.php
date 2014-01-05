@extends('layout')
@section('container')
	<section class="main">
		<h2>Modifier le profil de {{$student->first_name.' '.$student->name}}</h2>
		{{ Form::open(array('method' => 'PATCH', 'route' => array('students.update' , $student->slug))) }}
			{{ Form::label('first_name','Prénom :') }}
			{{ Form::text('first_name', $student->first_name, array('class'=>'text'))}}
			{{ $errors->first('first_name','<span class=error>:message</span>'); }}
			{{ Form::label('name','Nom :') }}
			{{ Form::text('name', $student->name, array('class'=>'text'))}}
			{{ $errors->first('name','<span class=error>:message</span>'); }}
			{{ Form::label('email','Email :') }}
			{{ Form::text('email', $student->email, array('class'=>'text'))}}
			{{ $errors->first('email','<span class=error>:message</span>'); }}
			{{ Form::label('level','Degré :') }}
			<select name="level" id="level">
				@foreach($levels as $level)
                    <option <?php if($student->level->id === $level->id){ echo('selected'); } ?> value="{{ $level->id }}">{{{ $level->name }}}</option>
            	@endforeach
			</select>
			{{ Form::submit('Valider la modification', array('class'=>'validation')) }}
		{{ Form::close() }}
	</section>
@stop
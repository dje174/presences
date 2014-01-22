@extends('layout')
@section('container')
	<section class="main">
		<div class="container">
			<h2>Modifier le profil de {{$student->first_name.' '.$student->name}}</h2>
			{{ Form::open(array('method' => 'PATCH', 'route' => array('students.update' , $student->slug), 'files' => true, 'class' => 'col-md-6')) }}
				<div class="form-group">
					{{ Form::label('first_name','Prénom :') }}
					{{ Form::text('first_name', $student->first_name, array('class'=>'form-control'))}}
					{{ $errors->first('first_name','<span class=error>:message</span>'); }}
				</div>
				<div class="form-group">
					{{ Form::label('name','Nom :') }}
					{{ Form::text('name', $student->name, array('class'=>'form-control'))}}
					{{ $errors->first('name','<span class=error>:message</span>'); }}
				</div>
				<div class="form-group">
					{{ Form::label('email','Email :') }}
					{{ Form::text('email', $student->email, array('class'=>'form-control'))}}
					{{ $errors->first('email','<span class=error>:message</span>'); }}
				</div>
				<div class="form-group">
					{{ Form::label('photo', 'Photo de profil (150x150)') }}
					{{ Form::file('photo', ['placeholder' => 'Ajouter une photo à l\'étudiant','class'=>'form-control']) }}
					{{ $errors->first('photo','<span class=error>:message</span>'); }}
				</div>
				<div class="form-group">
					{{ Form::label('level','Degré :') }}
					<select name="level" id="level" class="form-control">
						@foreach($levels as $level)
		                    <option <?php if($student->level->id === $level->id){ echo('selected'); } ?> value="{{ $level->id }}">{{{ $level->name }}}</option>
		            	@endforeach
					</select>
				</div>

			{{ Form::hidden('nameStudent', $student->name) }}
				{{ Form::submit('Valider la modification', array('class'=>'btn btn-success')) }}
			{{ Form::close() }}
		</div>
	</section>
@stop
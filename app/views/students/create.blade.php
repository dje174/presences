@extends('layout')

@section('container')
	<section class="main">
		<div class="container">
			<h2>Ajouter un élève</h2>
            <?php //dd($errors->all()); ?>
            {{ Form::open(array('route' => 'students.store', 'files' => true, 'class' => 'col-md-5')) }}
            	<div class="form-group">
					{{ Form::label('first_name','Prénom de l\'élève:') }}
					{{ Form::text('first_name', '', array('placeholder' => 'Le prénom du l\'élève','class'=>'form-control'));}}
					{{ $errors->first('first_name','<span class=error>:message</span>'); }}
				</div>
				<div class="form-group">
					{{ Form::label('name','Nom de l\'élève:') }}
					{{ Form::text('name','', array('placeholder' => 'Nom de l\'élève','class'=>'form-control',))}}
					{{ $errors->first('name','<span class=error>:message</span>'); }}
				</div>
				<div class="form-group">
					{{ Form::label('email','Email:') }}
					{{ Form::text('email','', array('placeholder' => 'Email','class'=>'form-control')) }}
					{{ $errors->first('email','<span class=error>:message</span>'); }}
				</div>
				<div class="form-group">
                	{{ Form::label('level','Degré:') }}
                	<select name="level_id" id="level_id" class="form-control">
					@foreach($levels as $level)
	                    <option value="{{ $level->id }}">{{{ $level->name }}}</option>
	            	@endforeach
				</select>
                </div>
                <div class="form-group">
	                {{ Form::label('photo', 'Photo de profil (150x150)') }}
					{{ Form::file('photo', ['placeholder' => 'Ajouter une photo à l\'étudiant','class'=>'form-control']) }}
				</div>
                
                {{ Form::submit('Valider la création', array('class'=>'btn btn-success')) }}
            {{ Form::close() }}
	    </div>
	</section>
@stop
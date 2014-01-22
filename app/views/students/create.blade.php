@extends('layout')

@section('container')
	<section class="main">
		<h2>Ajouter un élève</h2>
			<h3>Ajouter un élève</h3>
	            <div class="forms">
	            <?php //dd($errors->all()); ?>
	                {{ Form::open(array('route' => 'students.store', 'files' => true)) }}
	                	{{ Form::label('first_name','Prénom de l\'élève:') }}
	                    {{ Form::text('first_name', '', array('placeholder' => 'Le prénom du l\'élève','class'=>'text'));}}
	                        {{ $errors->first('first_name','<span class=error>:message</span>'); }}
	                    {{ Form::label('name','Nom de l\'élève:') }}
	                    {{ Form::text('name','', array('placeholder' => 'Nom de l\'élève','class'=>'text',))}}
	                    	{{ $errors->first('name','<span class=error>:message</span>'); }}
	                   	{{ Form::label('email','Email:') }}
	                    {{ Form::text('email','', array('placeholder' => 'Email','class'=>'text')) }}
	                    	{{ $errors->first('email','<span class=error>:message</span>'); }}
	                    {{ Form::label('level','Degré:') }}
	                    {{ Form::label('photo', 'Photo de profil (150x150)') }}
						{{ Form::file('photo', ['placeholder' => 'Ajouter une photo à l\'étudiant']) }}
	                    <select name="level_id" id="level_id">
							@foreach($levels as $level)
			                    <option value="{{ $level->id }}">{{{ $level->name }}}</option>
			            	@endforeach
						</select>
	                    {{ Form::submit('Valider la création', array('class'=>'creation')) }}
	                {{ Form::close() }}
	            </div>
	</section>
@stop
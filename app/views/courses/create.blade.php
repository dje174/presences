@extends('layout')

@section('container')
	<section class="main">
		<h2>Ajouter un cours</h2>
			<h3>Ajouter un cours à vos cours existant</h3>
	            <div class="forms">
	            <?php //dd($errors->all()); ?>
	                {{ Form::open(array('route' => 'courses.store')) }}
	                	{{ Form::label('name','Nom du cours :') }}
	                    {{ Form::text('name', '', array('placeholder' => 'Le nom du cours','class'=>'text'));}}
	                        {{ $errors->first('name','<span class=error>:message</span>'); }}
	                    {{ Form::label('description','Description du cours :') }}
	                    {{ Form::text('description','', array('placeholder' => 'Description du cours','class'=>'text',))}}
	                    	{{ $errors->first('description','<span class=error>:message</span>'); }}
	                   	{{ Form::label('level','Degré :') }}
	                    {{ Form::text('level','', array('placeholder' => 'Cours donné en','class'=>'text')) }}
	                    	{{ $errors->first('level','<span class=error>:message</span>'); }}
	                    {{ Form::label('year','Année académique :') }}
	                    {{ Form::text('year','',array('placeholder' => 'Année académique','class'=>'text')) }}
	                    	{{ $errors->first('year','<span class=error>:message</span>'); }}
	                    {{ Form::submit('Valider la création', array('class'=>'creation')) }}
	                {{ Form::close() }}
	            </div>
	</section>
@stop
@extends('layout')

@section('container')
	<section class="main">
		<h2>Ajouter un élève</h2>
			<h3>Ajouter un élève</h3>
	            <div class="forms">
	            <?php //dd($errors->all()); ?>
	                {{ Form::open(array('route' => 'students.store')) }}
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
	                    {{ Form::text('level','',array('placeholder' => 'Degré','class'=>'text')) }}
	                    	{{ $errors->first('level','<span class=error>:message</span>'); }}
	                    {{ Form::submit('Valider la création', array('class'=>'creation')) }}
	                {{ Form::close() }}
	            </div>
	</section>
@stop
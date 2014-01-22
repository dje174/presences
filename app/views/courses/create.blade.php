@extends('layout')

@section('container')
	<section class="main">
		<div class="container">
			<h2>Ajouter un cours à vos cours existant</h2>            <?php //dd($errors->all()); ?>
            {{ Form::open(array('route' => 'courses.store', 'class'=>'col-md-6')) }}

            	<div class="form-group">
					{{ Form::label('name','Nom du cours :') }}
					{{ Form::text('name', '', array('placeholder' => 'Le nom du cours','class'=>'form-control'));}}
					{{ $errors->first('name','<span class=error>:message</span>'); }}
                </div>    
                <div class="form-group">
					{{ Form::label('description','Description du cours :') }}
					{{ Form::text('description','', array('placeholder' => 'Description du cours','class'=>'form-control',))}}
					{{ $errors->first('description','<span class=error>:message</span>'); }}
                </div>
                <div class="form-group">
	               	{{ Form::label('level','Degré :') }}
	                <select name="level_id" id="level_id" class="form-control">
							@foreach($levels as $level)
			                    <option value="{{ $level->id }}">{{{ $level->name }}}</option>
			            	@endforeach
					</select>
				</div>
				<div class="form-group">
					{{ Form::label('year_id','Année académique :') }}
					<select name="year_id" id="year_id" class="form-control">
							@foreach($years as $year)
			                    <option value="{{ $year->id }}">{{{ $year->name }}}</option>
			            	@endforeach
					</select>
				</div>
				{{ Form::hidden( 'user_id', Auth::user()->id ) }}
                {{ Form::submit('Valider la création', array('class'=>'btn btn-success')) }}
            {{ Form::close() }}
	    </div>
	</section>
@stop
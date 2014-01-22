@extends('layout')

@section('container')
	<h2>Accueil</h2>
	Vous etes connecté en tant que {{ link_to_route('users.show',Auth::user()->first_name.' '.Auth::user()->name,Auth::user()->slug, Auth::user()->id) }}

	<div class="header">
    @if (Auth::check())
    <a href="{{ route('sessions.create') }}" title="Ajouter une session" class="create">
    	{{ Form::submit('Ajouter une session', array('class'=>'creation')) }}
    </a>
@endif
	</div>
	<div class="content">
	@if($sessions->count())

	{{ Calendar::generate(); }}
	@foreach($sessions as $session)
		{{$session->date_start;}}
	@endforeach	    
	@else
	    There are no sessions
	@endif
@stop
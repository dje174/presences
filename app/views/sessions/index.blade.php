@extends('layout')

@section('container')
	<div class="container">
		<h3>Vous êtes connecté(e) en tant que {{ link_to_route('users.show',Auth::user()->first_name.' '.Auth::user()->name,Auth::user()->slug, Auth::user()->id) }}</h3>
	    @if (Auth::check())
	    <a href="#" title="Ajouter une session" class="create">
	    	{{ Form::submit('Ajouter une session', array('class'=>'btn btn-success')) }}
	    </a>
		@endif
		<div class="content-sessions">
			<div class="table-sessions">
				@if($sessions->count())
					<div class="table-responsive">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Session de</th>
									<th>Date</th>
									<th>Commence</th>
									<th>Termine</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($sessions as $session)
									<tr>
										<td>{{$session->name}}</td>
										<td>{{$session->date_start->day.' - '.$session->date_start->month.' - '.$session->date_start->year}}</td>
										<td>{{$session->date_start->hour.'h'.$session->date_start->minute}}</td>
										<td>{{$session->date_end->hour.'h'.$session->date_end->minute}}</td>
									</tr>
								@endforeach 
							</tbody>
						</table>
					</div>  
				@else
				    Pas de sessions
				@endif
			</div>
			<div class="calendar">
				{{ Calendar::generate(); }}
			</div>
		</div>
	</div>
@stop
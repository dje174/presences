@extends('layout')

@section('container')
<section class="main">
	<h2>Accueil</h2>
	Vous etes connecté en tant que {{ link_to_route('users.show',Auth::user()->first_name.' '.Auth::user()->name,Auth::user()->slug, Auth::user()->id) }}

		<?php
		
		Calendar::generate( 2013, 12);

		?>
		
</section>
@stop
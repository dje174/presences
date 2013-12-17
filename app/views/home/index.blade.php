@extends('layout')

@section('container')

<h2>Accueil</h2>
Vous etes connecté en tant que {{ link_to_route('users.show',Auth::user()->first_name.' '.Auth::user()->name,Auth::user()->slug, Auth::user()->id) }}

@stop
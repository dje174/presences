@extends('layout')

@section('container')

<p>Accueil</p>
Vous etes connecté en tant que {{ link_to_route('users.show',Auth::user()->first_name.Auth::user()->name,Auth::user()->slug, Auth::user()->id) }}

@stop
@extends('layout')

@section('container')

<p>Accueil</p>
Vous etes connecté en tant que {{ Auth::user()->first_name }} {{ Auth::user()->name }}

@stop
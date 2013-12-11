@extends('layout')

@section('container')

Mon profil ({{ Auth::user()->first_name, Auth::user()->name}})

@stop
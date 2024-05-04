@extends('layout.master')

@section('main')
    <h1>Fiche auteur</h1>
    Id: {{ $auteur->id }}</td>
    Noms: {{ $auteur->last_name }}
    Prenoms: {{ $auteur->first_name }}
@endsection

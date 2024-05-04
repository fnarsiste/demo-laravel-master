@extends('layout.master')

@section('main')
    <h1>Modifier un auteur</h1>
    <form action="{{ route('auteurs.update', $auteur->id) }}" method="POST">
      @csrf
      @method('PUT')
      <div>
         <label for="first_name">Prénoms</label>
         <input type="text" name="first_name" id="first_name"
         value="{{$auteur->first_name}}">
      </div>
      <div>
         <label for="last_name">Noms</label>
         <input type="text" name="last_name" id="last_name"
         value="{{$auteur->last_name}}">
      </div>
      <div>
         <button type="submit">Modifer</button>
      </div>
    </form>
@endsection

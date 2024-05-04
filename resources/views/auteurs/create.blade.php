@extends('layout.master')

@section('main')
    <h1>Créer un auteur</h1>
    <form action="{{ route('auteurs.store') }}" method="POST">
      @csrf
      <div>
         <label for="first_name">Prénoms</label>
         <input type="text" name="first_name" id="first_name">
      </div>
      <div>
         <label for="last_name">Noms</label>
         <input type="text" name="last_name" id="last_name">
      </div>
      <div>
         <button type="submit">Envoyer</button>
      </div>
    </form>
@endsection

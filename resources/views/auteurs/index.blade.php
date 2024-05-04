@extends('layout.master')

@section('main')
    <h1>Liste des auteurs</h1>
    <table>
        <tr>
            <td>ID</td>
            <td>Noms</td>
            <td>Prénoms</td>
            <td>Actions</td>
        </tr>
        @foreach ($list_auteurs as $auteur)
            <tr>
               <td>{{$auteur->id}}</td>
               <td>{{$auteur->last_name}}</td>
               <td>{{$auteur->first_name}}</td>
               <td>
                <a href="{{route('auteurs.edit', $auteur->id)}}">📝Edit</a>
                <form onsubmit="return confirm('Supprimer ?');" action="{{route('auteurs.destroy', $auteur->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete">
                </form> - Show</td>
            </tr>
        @endforeach
    </table>
@endsection

<?php

namespace App\Http\Controllers;

use App\Models\Auteur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuteurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Recuperer la liste des auteurs
        $auteurs = Auteur::all();
        // passer les donner à la vue
        // return view('auteurs.index', compact('auteurs')); OU
        return view('auteurs.index', [
            'list_auteurs' => $auteurs,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auteurs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $auteur = new Auteur();
        $auteur->first_name = $request->first_name;
        $auteur->last_name = $request->last_name;
        // $auteur->save();

        // pour ce context, n'oubliez pas d'ajouter le champ fillable dans le Model
        Auteur::create($request->except('_token'));

        return redirect()->route('auteurs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $auteur = Auteur::findOrFail($id);
        return view('auteurs.show', compact('auteur'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $auteur = Auteur::findOrFail($id);
        return view('auteurs.edit', compact('auteur'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $auteur = Auteur::findOrFail($id);
        $auteur->first_name = $request->first_name;
        $auteur->last_name = $request->last_name;
        $auteur->update();
        // Auteur::update()

        return redirect()->route('auteurs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $auteur = Auteur::findOrFail($id);
        $auteur->delete();
        return redirect()->route('auteurs.index');
    }
}

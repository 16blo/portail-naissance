<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

# Page d'accueil
Route::get('/', function () {
    return view('accueil');
});

Route::get('/accueil', function () {
    return "vous etes sur la page d'accueil de mon application";
});

# Pages du portail
Route::get('/a-propos', function () {
    return view('apropos');
});

Route::get('/bonjour', function () {
    return 'Bonjour, je suis le portail.';
});

Route::get('/demande/{id}', function ($id) {
    return 'Vous consultez la demande numéro ' . $id;
})->whereNumber('id');

Route::get('/salut/{nom}', function ($nom) {
    return view('salut', ['nom' => $nom]);
});

Route::get('/demandes', function () {
    $demandes = [
        ['nom' => 'KOUAME Aya',    'statut' => 'En attente'],
        ['nom' => 'DIALLO Ibrahim', 'statut' => 'Validée'],
        ['nom' => 'TRAORE Awa',     'statut' => 'Rejetée'],
        ['nom' => 'KONE Moussa',    'statut' => 'En cours'],
    ];
    return view('demandes', ['demandes' => $demandes]);
});

# Formulaire
Route::get('/demande/nouvelle', function () {
    return view('demandes.formulaire');
});

Route::post('/demande', function (Request $request) {
    $valide = $request->validate([
        'nom'             => 'required|string|max:50',
        'prenom'          => 'required|string|max:50',
        'lieu'            => 'required|string|max:100',
        'date_naissance'  => 'required|date|before:today|after:1900-01-01',
        'telephone'       => 'required|digits:10',
        'motif'           => 'required|in:Études,Mariage,Passeport',
    ], [
        'telephone.digits' => 'Le téléphone doit contenir exactement 10 chiffres, sans espaces.',
    ]);

    return redirect('/demande/nouvelle')
           ->with('succes', 'Votre demande a bien été reçue.');
});
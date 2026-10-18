<?php

use Illuminate\Support\Facades\Route;

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


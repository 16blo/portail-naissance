<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bonjour', function () {
    return view('bonjour');
});

Route::get('/accueil', function () {
    return "vous etes sur la page d'accueil de mon application";
});
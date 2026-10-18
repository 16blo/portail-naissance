@extends('layouts.base')
@section('titre', 'Nouvelle demande')
@section('contenu')
<h2>Nouvelle demande d'extrait d'acte de naissance</h2>
@if(session('succes'))
<div style="border: 2px solid green; padding: 8px;">{{ session('succes') }}</div>
@endif
@if($errors->any())
<div style="border: 2px solid red; padding: 8px;">
<ul>
@foreach($errors->all() as $erreur)
<li>{{ $erreur }}</li>
@endforeach
</ul>
</div>
@endif
<form action="/demande" method="POST">
@csrf
<p><label>Nom : <input type="text" name="nom" value="{{ old('nom') }}"></label></p>
<p><label>Prénom : <input type="text" name="prenom" value="{{ old('prenom') }}"></
label></p>
<p><label>Lieu de naissance : <input type="text" name="lieu" value="{{ old('lieu')
}}"></label></p>
<p><label>Date de naissance :
<input type="date" name="date_naissance" value="{{ old('date_naissance') }}"></
label></p>
<p><label>Téléphone : <input type="text" name="telephone" value="{{ old('telephone')
}}"></label></p>
<p><label>Motif :
<select name="motif">
<option value="">-- Choisir --</option>
@foreach(['Études', 'Mariage', 'Passeport'] as $m)
<option value="{{ $m }}" @selected(old('motif') === $m)>{{ $m }}</option>
@endforeach
</select></label></p>
<p><button type="submit">Soumettre</button></p>
</form>
@endsection
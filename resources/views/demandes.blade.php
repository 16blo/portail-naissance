@extends('layouts.base')

@section('titre', 'Demandes')

@section('contenu')

    <h2>Demandes en base : {{ $demandes->count() }}</h2>

    <table border="1" cellpadding="8" style="margin-top: 1rem;">
        <thead>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Motif</th>
                <th>Statut</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($demandes as $d)
            <tr>
                <td>{{ $d->id }}</td>
                <td>{{ $d->nom }}</td>
                <td>{{ $d->prenom }}</td>
                <td>{{ $d->motif }}</td>
                <td>{{ $d->statut }}</td>
                <td>{{ $d->created_at->format('d/m/Y H:i') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
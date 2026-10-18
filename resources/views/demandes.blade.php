@extends('layouts.base')

@section('titre', 'Demandes')

@section('contenu')
    <h2>Liste des demandes (démonstration)</h2>

    <table border="1" cellpadding="8">
        <tr>
            <th>N°</th>
            <th>Nom</th>
            <th>Statut</th>
        </tr>

        @foreach($demandes as $index => $demande)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $demande['nom'] }}</td>
            <td>
                @if($demande['statut'] === 'En attente')
                    <strong>{{ $demande['statut'] }}</strong>
                @else
                    {{ $demande['statut'] }}
                @endif
            </td>
        </tr>
        @endforeach
    </table>
@endsection
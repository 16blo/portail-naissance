<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    // ✅ Liste blanche : champs qu'on autorise à remplir d'un coup
    protected $fillable = [
        'nom',
        'prenom',
        'lieu',
        'date_naissance',
        'telephone',
        'motif'
        
    ];
}
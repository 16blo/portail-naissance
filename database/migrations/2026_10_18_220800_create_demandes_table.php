<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->id(); // identifiant unique, créé automatiquement
            $table->string('nom');         // texte : nom de la personne
            $table->string('prenom');      // texte : prénom
            $table->string('lieu');        // texte : lieu de naissance
            $table->date('date_naissance'); // date : format spécial pour les dates
            $table->string('telephone');   // texte : numéro
            $table->string('motif');       // texte : Études / Mariage / Passeport
            $table->string('statut')->default('En attente'); // valeur par défaut
            $table->timestamps(); // créé_le / modifié_le → géré par Laravel
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demandes');
    }
};
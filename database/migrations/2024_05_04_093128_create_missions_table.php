<?php

use App\Models\Auteur;
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
        Schema::create('missions', function (Blueprint $table) {
            $table->id();
            $table->date('date_debut');
            $table->time('heure_debut');
            $table->date('date_fin');
            $table->time('heure_fin');
            $table->string('lieu');
            $table->integer('taux_horaire');
            $table->boolean('status')->nullable();
            $table->text('description');

            // Relation sur auteurs (nativement géré par Laravel)
            $table->foreignIdFor(Auteur::class);

            // Relation sur auteurs (avec plus de controle)
            // $table->unsignedBigInteger('id_auteur');
            // $table->foreign('id_auteur')->references('id')->on('auteurs');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('missions');
    }
};

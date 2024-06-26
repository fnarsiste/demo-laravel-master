<?php

use App\Models\Competence;
use App\Models\Mission;
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
        Schema::create('comptences_missions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Mission::class);
            $table->foreignIdFor(Competence::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_comptence_mission');
    }
};

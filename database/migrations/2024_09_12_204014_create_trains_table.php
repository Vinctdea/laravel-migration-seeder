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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda', 50);
            $table->string('StazionePartenza', 50);
            $table->string('StazioneArrivo', 50);
            $table->string('OrarioPartenza', 50);
            $table->string('OrarioArrivo', 50);
            $table->tinyInteger('CodiceTreno');
            $table->tinyInteger('NumeroCarrozze')->nullable();
            $table->boolean('InOrario');
            $table->boolean('Cancellato');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};

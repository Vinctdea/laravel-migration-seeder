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
            $table->string('Stazione Partenza', 50);
            $table->string('Stazione Arrivo', 50);
            $table->string('Orario Partenza', 50);
            $table->string('Orario Arrivo', 50);
            $table->tinyInteger('Codice Treno');
            $table->tinyInteger('Numero Carrozze')->nullable();
            $table->boolean('In Orario');
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

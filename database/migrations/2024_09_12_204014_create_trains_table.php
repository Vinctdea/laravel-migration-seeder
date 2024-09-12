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
            $table->string('azienda', 50);
            $table->string('stazione partenza', 50);
            $table->string('Stazione di arrivo', 50);
            $table->string('orario partenza', 50);
            $table->string('orario arrivo', 50);
            $table->tinyInteger('codice treno');
            $table->tinyInteger('numero carrozze')->nullable();
            $table->boolean('in orario');
            $table->boolean('cancellato');
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

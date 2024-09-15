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
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->string('destinazione', 100);
            $table->string('luogo_partenza', 255);
            $table->string('luogo_arrivo', 255);
            $table->decimal('prezzo', total: 8, places: 2)->nullable();
            $table->string('itinerario', 255)->nullable();
            $table->string('img_url', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('travels');
    }
};

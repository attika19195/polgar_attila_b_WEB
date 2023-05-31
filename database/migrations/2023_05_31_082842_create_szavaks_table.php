<?php

use App\Models\Szavak;
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
        Schema::create('szavaks', function (Blueprint $table) {
            $table->id('id');
            $table->string('angol');
            $table->string('magyar');
            $table->foreignId('temaId')->references('id')->on('temas');
            $table->timestamps();
        });

        Szavak::create(['angol' => 'map', 'magyar' => 'térkép', 'temaId' => 1]);
        Szavak::create(['angol' => 'destination', 'magyar' => 'célállomás', 'temaId' => 1]);
        Szavak::create(['angol' => 'Underground', 'magyar' => 'metro', 'temaId' => 1]);

        Szavak::create(['angol' => 'waitress', 'magyar' => 'pincérnő', 'temaId' => 2]);
        Szavak::create(['angol' => 'waiter', 'magyar' => 'pincérfiú', 'temaId' => 2]);
        Szavak::create(['angol' => 'tip', 'magyar' => 'borravaló', 'temaId' => 2]);
    }


    public function down(): void
    {
        Schema::dropIfExists('szavaks');
    }
};

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
        Schema::create('dossier_de_locations', function (Blueprint $table) {
            $table->id("numeroDossier");
            $table->boolean("estPaye");
            $table->foreignId("codeReservation")->constrained("reservations")->references("codeReservation")->on("reservations")->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dossier_de_locations');
    }
};

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
        Schema::create('reserv_vehicules', function (Blueprint $table) {
            $table->foreignId('reservation_id')->constrained('reservations','codeReservation')->onDelete('cascade');
            $table->foreignId('vehicule_id')->constrained('vehicules','matricule')->onDelete('cascade');
            $table->primary(['reservation_id', 'vehicule_id']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserv_vehicules');
    }
};

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReservationVehicule extends Model
{
    // Spécifier les champs qu'on peut remplir massivement
    protected $fillable = [
        'id_vehicule',
        'id_reservation',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reserv_vehicule extends Model
{
    protected $fillable = [
        'id_vehicule',
        'id_reservation',
    ];
}

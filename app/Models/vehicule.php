<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    protected $fillable = [
        'matricule',
        'modele',
        'nombredeplace',
        'prix',
        'disponible'
    ];

    protected $casts = [
        'prix' => 'float',
        'nombredeplace' => 'integer',
        'disponible' => 'boolean'
    ];

    public function reservations()
    {
        return $this->belongsToMany(App\Models\Reservation::class);
    }
}

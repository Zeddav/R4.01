<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DossierDeLocation extends Model
{
    use HasFactory;

    protected $primaryKey = 'numeroDossier';

    protected $fillable = ['estPaye', 'codeReservation', 'vehicule_id'];

    public function reservation()
    {
        return $this->belongsTo(Reservation::class, 'reservation_id');
    }
    
}



<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $table = "reservations";

    protected $primaryKey = "codeReservation";

    protected $fillable =[
        "dateReservation",
        "dateAller",
        "dateRetour",
    ];

    protected $casts = [
        "dateReservation" => "string",
        "dateAller" => "string",
        "dateRetour" => "string",
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}


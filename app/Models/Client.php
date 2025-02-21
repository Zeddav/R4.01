<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    
    protected $table = 'clients';

    protected $primaryKey = 'numeroClient';

    protected $fillable = [
        'nom',
        'email',
        'carteBancaire'
    ];

    protected $casts = [
        'nom' => 'string',
        'email' => 'string',
        'carteBancaire' => 'string'
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}

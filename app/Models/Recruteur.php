<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruteur extends Model
{
    public function offres()
    {
        return $this->hasMany(Offre::class);
    }

    use HasFactory;
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}

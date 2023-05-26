<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adresse extends Model
{
    public function offre()
    {
        return $this->hasOne(Offre::class);
    }

    use HasFactory;
}

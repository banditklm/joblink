<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
        public function recruteur()
    {
        return $this->belongsTo(Recruteur::class);
    }

    public function adresse()
    {
        return $this->belongsTo(Adresse::class);
    }

    public function candidats()
    {
        return $this->belongsToMany(Candidat::class);
    }
    public function candidatures()
    {
        return $this->hasMany(Candidature::class);
    }
    use HasFactory;
}

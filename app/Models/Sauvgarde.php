<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sauvgarde extends Model
{   
    protected $fillable = ['offre_id', 'candidat_id'];

    public function offre()
    {
        return $this->belongsTo(Offre::class);
    }

    public function candidat()
    {
        return $this->belongsTo(Candidat::class);
    }
    use HasFactory;
}

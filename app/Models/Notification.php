<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    public function offre()
    {
        return $this->belongsTo(Offre::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function from()
    {
        return $this->belongsTo(User::class);
    }
}

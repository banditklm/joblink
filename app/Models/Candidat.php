<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    protected $fillable = ['user_id', 'age', 'portfolio'];
    use HasFactory;
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

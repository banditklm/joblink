<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Experience;

class Candidat extends Model
{
    protected $fillable = ['user_id', 'age', 'portfolio'];
    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }
    use HasFactory;
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

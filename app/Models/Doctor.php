<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        "image",
        "speciality_id",
        "description",
    ];
    public function User(){
        return $this->belongsTo(User::class);

    }
    
    public function Speciality(){
        return $this->belongsTo(Speciality::class);
    }

    public function RendezVous(){
        return $this->hasMany(RendezVous::class);
    }
}

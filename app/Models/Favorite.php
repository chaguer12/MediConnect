<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'doctor_id',
    ];

    public function User(){
        return $this->belongsTo(Favorite::class);
    }
    
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RendezVous extends Model
{
    use HasFactory;
    protected $fillable =[];

    public function User(){
        return $this->belongsTo(User::class);
    }

    public function Doctor(){
        return $this->belongsTo(Doctor::class);
    }

}

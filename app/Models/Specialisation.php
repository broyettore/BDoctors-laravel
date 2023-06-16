<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialisation extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function doctors()
    {
        return $this->belongsToMany(Doctor::class, 'doctor_specialisation');
    }

}

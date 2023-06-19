<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Sponsorship extends Model
{
    use HasFactory;

    public function doctors(): BelongsToMany
    {
        return $this->belongsToMany(Doctor::class);
    }
}
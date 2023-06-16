<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Doctor extends Model
{
    use HasFactory;

    protected $guarded = ["cv", "photo"];

    public function user():BelongsTo {
        return $this->belongsTo(User::class);
    }


    public function specialisations(): BelongsToMany
    {
        return $this->belongsToMany(Specialisation::class);
    }
    
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }

    public function votes(): BelongsToMany
    {
        return $this->belongsToMany(Vote::class);
    }
}

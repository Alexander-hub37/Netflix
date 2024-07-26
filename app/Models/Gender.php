<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Gender extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    // Un genero puede tener muchas películas RECORDAR
    public function movies(): BelongsToMany
    {
        return $this->belongsToMany(Movie::class, 'gender_movie');
    }
}

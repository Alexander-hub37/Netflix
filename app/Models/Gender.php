<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];


    // Un genero puede tener muchas peliculas
    // Uno a muchos recordar
    public function movies(): HasMany
    {
        return $this->hasMany(Movie::class);
    }
}

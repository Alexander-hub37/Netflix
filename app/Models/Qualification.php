<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    use HasFactory;

    protected $fillable = [
        'movie_id',
        'value',
    ];

    //cada calificación pertenece a una película
    public function movie()
    {
        return $this->belongsTo(Movie::class);
    } 

}

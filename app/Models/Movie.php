<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'banner',
        'image',
        'video',
        'id_gender'
    ];

    //una pelicula puede tener muchos generos RECORDAR
    public function genders(): BelongsToMany
    {
        return $this->belongsToMany(Gender::class, 'gender_movie');
    }

    //Una pelicula tiene muchas calificaciones
    public function qualifications()
    {
        return $this->hasMany(Qualification::class);
    }


    public function setBannerAttribute($value)
    {
        $this->attributes['banner'] = $this->uploadFile($value, 'banners');
    }

    public function setImageAttribute($value)
    {
        $this->attributes['image'] = $this->uploadFile($value, 'images');
    }

    public function setVideoAttribute($value)
    {
        $this->attributes['video'] = $this->uploadFile($value, 'videos');
    }

    private function uploadFile($file, $folder)
    {
        if ($file) {
            $filename = time().'_'.$file->getClientOriginalName();
            $file->storeAs('public/'.$folder, $filename);
            return 'storage/'.$folder.'/'.$filename;
        }
        return null;
    }
}

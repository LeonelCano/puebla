<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atractivo extends Model
{
    protected $fillable = ['nombre', 'descripcion', 'tipo', 'calle', 'numero', 'colonia', 'cp', 'municipio', 'estado', 'mapa', 'status', 'ruta', 'zona_id'];

//Relacion - Un atractivo tiene muchas imagenes
    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }

//Relacion - Un atractivo tiene muchas imagenes
    public function images()
    {
    	return $this->hasMany(Image::class);
    }

//Relacion - Un atractivo tiene muchas calificaciones
    public function rates()
    {
    	return $this->hasMany(Rate::class);
    }

//Relacion - Muchos atractivos pertenecen a una Zona
    public function zona()
    {
    	return $this->belongsTo(Zona::class);
    }

    public function scopeSearch($query, $nombre)
    {
        return $query->where('nombre', 'LIKE', "%$nombre%");
    }
}

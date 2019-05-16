<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recinto extends Model
{
    protected $fillable = ['nombre', 'sitioweb', 'calle', 'numero', 'colonia', 'cp', 'municipio', 'estado', 'mapa', 'status', 'ruta'];

//Relacion - Un recinto tiene muchos eventos
	public function eventos()
	{
		return $this->hasMany(Evento::class);
	}
	
//Relacion - Un recinto tiene muchas imagenes
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

//Relacion - Un recinto tiene muchas imagenes
    public function images()
    {
        return $this->hasMany(Image::class);
    }

//Relacion - Un recinto tiene muchas calificaciones
    public function rates()
    {
        return $this->hasMany(Rate::class);
    }

    public function scopeSearch($query, $nombre)
    {
        return $query->where('nombre', 'LIKE', "%$nombre%");
    }
}

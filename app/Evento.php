<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $fillable = ['nombre', 'descripcion', 'fechaInicio', 'fechaFinal', 'horaInicio', 'horaFinal', 'sitioweb', 'tipo', 'status', 'ruta', 'recinto_id'];

//Relacion - Un evento tiene muchas imagenes
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

//Relacion - Un evento tiene muchas imagenes
    public function images()
    {
        return $this->hasMany(Image::class);
    }

//Relacion - Un evento tiene muchas calificaciones
    public function rates()
    {
        return $this->hasMany(Rate::class);
    }

//Relacion - Muchos eventos pertenecen a una Zona
    public function Recinto()
    {
        return $this->belongsTo(Recinto::class);
    }

    public function scopeSearch($query, $nombre)
    {
        return $query->where('nombre', 'LIKE', "%$nombre%");
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['ruta', 'atractivo_id', 'recinto_id', 'evento_id'];

//Relacion - Muchas imagenes pertenecen a un atractivo
    public function atractivo()
    {
    	return $this->belongsTo(Atractivo::class);
    }

//Relacion - Muchas imagenes pertenecen a un evento
    public function evento()
    {
    	return $this->belongsTo(Evento::class);
    }

//Relacion - muchas imagenes pertenecen a un recinto
    public function recinto()
    {
    	return $this->belongsTo(Recinto::class);
    }
}

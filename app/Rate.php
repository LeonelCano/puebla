<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    //
//Relacion - Muchss calificaciones pertenecen a un atractivo
    public function atractivo()
    {
    	return $this->belongsTo(Atractivo::class);
    }

//Relacion - Muchas calificaciones pertenecen a un evento
    public function evento()
    {
    	return $this->belongsTo(Evento::class);
    }

//Relacion - muchas calificaciones pertenecen a un recinto
    public function recinto()
    {
    	return $this->belongsTo(Recinto::class);
    }   
}

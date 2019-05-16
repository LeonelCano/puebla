<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['nombre', 'email', 'descripcion', 'atractivo_id', 'recinto_id', 'evento_id'];
    
//Relacion - Muchos comentarios pertenecen a un atractivo
    public function atractivo()
    {
    	return $this->belongsTo(Atractivo::class);
    }

//Relacion - Muchos comentarios pertenecen a un evento
    public function evento()
    {
    	return $this->belongsTo(Evento::class);
    }

//Relacion - muchos comentarios pertenecen a un recinto
    public function recinto()
    {
    	return $this->belongsTo(Recinto::class);
    }
}

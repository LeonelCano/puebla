<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zona extends Model
{
    protected $fillable = ['nombre', 'status', 'ruta'];

//Relacion - Una zona tiene muchos atractivos
   public function atractivos()
   {
    	return $this->hasMany(Atractivo::class);
    }

    public function scopeSearch($query, $nombre)
    {
        return $query->where('nombre', 'LIKE', "%$nombre%");
    }
}

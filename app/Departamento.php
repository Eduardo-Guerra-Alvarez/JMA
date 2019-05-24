<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    public function trabajadores(){
    	return $this->hasMany(Trabajador::class);
    }
    protected $fillable = ['nombre', 'email', 'password'];

    public function setNombreAttribute($nombre)
    {
        $this->attributes['nombre'] = strtoupper($nombre);
    }
}

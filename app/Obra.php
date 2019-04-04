<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obra extends Model
{
    //protected $table = 'obras';
    public function trabajadores(){
		return $this->belongsToMany(Trabajador::class);
	}
	protected $fillable = ['nombre_Obra', 'lugar_Obra', 'fecha_inicio', 'fecha_termino'];
}

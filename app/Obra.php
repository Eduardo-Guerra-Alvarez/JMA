<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Obra extends Model
{
	use SoftDeletes;
    protected $dates = ['fecha_inicio', 'fecha_termino', 'created_at', 'updated_at', 'deleted_at'];
    public function trabajadores(){
		return $this->belongsToMany(Trabajador::class);
	}
	protected $fillable = ['nombre_Obra', 'lugar_Obra', 'fecha_inicio', 'fecha_termino'];

	public function archivos(){
		return $this->morphMany('App\Archivo', 'modelo');
	}
}

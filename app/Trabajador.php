<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
	protected $guarded = ['id'];
    public function departamento(){
    	return $this->belongsTo('App\Departamento', 'departamento_id');
    }


    protected $table = 'trabajadores'; // para asignar un nombre a la tabla
    
    public function obras(){
		return $this->belongsToMany(Obra::class);

		
	}
	protected $fillable = ['nombre', 'departamento_id', 'domicilio', 'email', 'rfc'];

	//Convertir los RFC del trabajador en Mayusculas
	//Con get Obtiene los datos y los transforma

	public function getRfcAttribute($rfc)
    {
        return strtoupper($rfc);
    }

    //Al agregar un dato automaticamente lo transforma a minuscula

	/*public function setNombreAttribute($nombre)
    {
        $this->attributes['nombre'] = strtolower($nombre);
    }*/
}

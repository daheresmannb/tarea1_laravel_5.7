<?php

namespace App\models;
use Validator;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model {
	protected $table = 'alumnos'; 
    protected $fillable = [
        'id',
        'nombres',
        'apellidos',
        'edad',
        'correo',
        'fecha_nac',
        'curso_id',
        'created_at',
        'updated_at'
    ];

    public function Validar($array){
    	$validator = Validator::make(
    		$array, [
    			'nombres' => 'required',
    			'apellidos' => 'required',
    			'edad' => 'required',
    			'correo' => 'required',
    			//'fecha_nac' => 'required',
                'curso_id' => 'required',
			]
		);
		return $validator;
    }
}
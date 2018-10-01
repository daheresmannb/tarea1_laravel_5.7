<?php

namespace App\models;

use Validator;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model {
    protected $table = 'profesores'; 
    protected $fillable = [
        'id',
        'nombres',
        'apellidos',
        'materia',
        'edad',
        'correo',
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
                'materia' => 'required',
    			'correo' => 'required',
    			'curso_id' => 'required',
			]
		);
		return $validator;
    }
}
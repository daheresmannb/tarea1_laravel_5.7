<?php

namespace App\models;

use Validator;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model {
    protected $table = 'cursos'; 
    protected $fillable = [
        'id',
        'nombre',
        'created_at',
        'updated_at'
    ];

    public function Validar($array){
    	$validator = Validator::make(
    		$array, [
    			'nombre' => 'required',
			]
		);
		return $validator;
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Response;
use App\Http\Requests;
use App\models\Alumno;
use App\models\Curso;
use App\models\Profesor;

class EducacionController extends Controller {

////////// CRUD ALUMNOS ///////////////////////////////////
	public function CreateAlumnos(Request $request) {
		$alumno = new Alumno();
		$val = $alumno->Validar($request->all());

    	if ($val->fails()) {
    		$retorno['error']     = true;
        	$retorno['respuesta'] = $val->messages();
    	} else {
			$alumno->nombres 	  = $request->nombres;
			$alumno->apellidos 	  = $request->apellidos;
			$alumno->correo 	  = $request->correo;
			$alumno->edad 		  = $request->edad;
			$alumno->fecha_nac 	  = $request->fecha_nac;
			$alumno->cursos_id 	  = $request->curso_id;
			$alumno->save();

			$retorno['error']     = false;
        	$retorno['respuesta'] = $alumno;
		}
		return Response::json($retorno);
	}

	public function ReadAlumnos(Request $request) {
		if ($request->has('alumno_id') && $request->alumno_id != -1) {
			$alumnos = Alumno::find($request->alumno_id);

			$retorno['error']     = false;
        	$retorno['respuesta'] = $alumnos;
		} elseif ($request->has('alumno_id') && $request->alumno_id == -1) {
			$alumnos = Alumno::all();

			$retorno['error']     = false;
        	$retorno['respuesta'] = $alumnos;
		} else {
			$retorno['error']     = true;
        	$retorno['respuesta'] = "Registro no encontrado";
		}
		return Response::json($retorno);
	}

	public function UpdateAlumnos(Request $request) {
		if ($request->has('alumno_id')) {
			$alumno = Alumno::find($request->alumno_id);
			if (isset($alumno)) {
				$val = $alumno->Validar($request->all());
				if ($val->fails()) {
		    		$retorno['error']     = true;
		        	$retorno['respuesta'] = $val->messages();
		    	} else {
					$alumno->nombres 	  = $request->nombres;
					$alumno->apellidos 	  = $request->apellidos;
					$alumno->correo 	  = $request->correo;
					$alumno->edad 		  = $request->edad;
					$alumno->fecha_nac 	  = $request->fecha_nac;
					$alumno->cursos_id 	  = $request->curso_id;
					$alumno->save();

					$retorno['error']     = false;
		        	$retorno['respuesta'] = "Registro actualizado satisfactoriamente";
		        }
			} else {
				$retorno['error']     = true;
	        	$retorno['respuesta'] = "Registro no encontrado";
	        	$retorno['alumno']	  = $alumno;
			}
		} else {
			$retorno['error']     = true;
        	$retorno['respuesta'] = "Requiere id";
		}
		return Response::json($retorno);
	}

	public function DeleteAlumnos(Request $request) {
		if ($request->has('alumno_id')) {
			$alumnos = Alumno::find($request->alumno_id);
			$alumnos->delete();

			$retorno['error']     = false;
        	$retorno['respuesta'] = "Registro eliminado satisfactoriamente";
		} else {
			$retorno['error']     = false;
        	$retorno['respuesta'] = "Requiere id";
		}
		return Response::json($retorno);
	}
//////////////////////////////////////////////////////////////////////

/////////////////// CRUD CURSO //////////////////////////////////////
	public function CreateCurso(Request $request) {
		$curso = new Curso();
		$val = $curso->Validar($request->all());

    	if ($val->fails()) {
    		$retorno['error']     = true;
        	$retorno['respuesta'] = $val->messages();
    	} else {
			$curso->nombre 	  = $request->nombre;
			$curso->save();

			$retorno['error']     = false;
        	$retorno['respuesta'] = $curso;
		}
		return Response::json($retorno);
	}

	public function ReadCursos(Request $request) {
		if ($request->has('curso_id') && $request->curso_id != -1) {
			$cursos = Curso::find($request->curso_id);

			$retorno['error']     = false;
        	$retorno['respuesta'] = $cursos;
		} elseif ($request->has('curso_id') && $request->curso_id == -1) {
			$cursos = Curso::all();

			$retorno['error']     = false;
        	$retorno['respuesta'] = $cursos;
		} else {
			$retorno['error']     = true;
        	$retorno['respuesta'] = "Registro no encontrado";
		}
		return Response::json($retorno);
	}

	public function UpdateCursos(Request $request) {
		if ($request->has('curso_id')) {
			$curso = Curso::find($request->curso_id);
			if (isset($curso)) {
				$val = $curso->Validar($request->all());
				if ($val->fails()) {
		    		$retorno['error']     = true;
		        	$retorno['respuesta'] = $val->messages();
		    	} else {
					$curso->nombre 	  = $request->nombres;
					$curso->save();

					$retorno['error']     = false;
		        	$retorno['respuesta'] = "Registro actualizado satisfactoriamente";
		        }
			} else {
				$retorno['error']     = true;
	        	$retorno['respuesta'] = "Registro no encontrado";
	        	$retorno['curso']	  = $curso;
			}
		} else {
			$retorno['error']     = true;
        	$retorno['respuesta'] = "Requiere id";
		}
		return Response::json($retorno);
	}

	public function DeleteCursos(Request $request) {
		if ($request->has('curso_id')) {
			$alumnos = Curso::find($request->curso_id);
			$alumnos->delete();

			$retorno['error']     = false;
        	$retorno['respuesta'] = "Registro eliminado satisfactoriamente";
		} else {
			$retorno['error']     = false;
        	$retorno['respuesta'] = "Requiere id";
		}
		return Response::json($retorno);
	}
//////////////////////////////////////////////////////////////////////

///////////// CRUD PROFESOR //////////////////////////////////////////
	public function CreateProfesores(Request $request) {
		$profesor = new Profesor();
		$val = $profesor->Validar($request->all());

    	if ($val->fails()) {
    		$retorno['error']     = true;
        	$retorno['respuesta'] = $val->messages();
    	} else {
			$profesor->nombres 	  = $request->nombres;
			$profesor->apellidos 	  = $request->apellidos;
			$profesor->correo 	  = $request->correo;
			$profesor->materia 	  = $request->materia;
			$profesor->edad 		  = $request->edad;
			$profesor->curso_id 	  = $request->curso_id;
			$profesor->save();

			$retorno['error']     = false;
        	$retorno['respuesta'] = $profesor;
		}
		return Response::json($retorno);
	}

	public function ReadProfesores(Request $request) {
		if ($request->has('profesor_id') && $request->profesor_id != -1) {
			$alumnos = Profesor::find($request->profesor_id);

			$retorno['error']     = false;
        	$retorno['respuesta'] = $alumnos;
		} elseif ($request->has('profesor_id') && $request->profesor_id == -1) {
			$alumnos = Profesor::all();

			$retorno['error']     = false;
        	$retorno['respuesta'] = $alumnos;
		} else {
			$retorno['error']     = true;
        	$retorno['respuesta'] = "Registro no encontrado";
		}
		return Response::json($retorno);
	}

	public function UpdateProfesores(Request $request) {
		if ($request->has('profesor_id')) {
			$profesor = Profesor::find($request->profesor_id);
			if (isset($profesor)) {
				$val = $profesor->Validar($request->all());
				if ($val->fails()) {
		    		$retorno['error']     = true;
		        	$retorno['respuesta'] = $val->messages();
		    	} else {
					$profesor->nombres 	  = $request->nombres;
					$profesor->apellidos 	  = $request->apellidos;
					$profesor->correo 	  = $request->correo;
					$profesor->materia 	  = $request->materia;
					$profesor->edad 		  = $request->edad;
					$profesor->curso_id 	  = $request->curso_id;
					$profesor->save();

					$retorno['error']     = false;
		        	$retorno['respuesta'] = "Registro actualizado satisfactoriamente";
		        }
			} else {
				$retorno['error']     = true;
	        	$retorno['respuesta'] = "Registro no encontrado";
	        	$retorno['profesor']	  = $profesor;
			}
		} else {
			$retorno['error']     = true;
        	$retorno['respuesta'] = "Requiere id";
		}
		return Response::json($retorno);
	}

	public function DeleteProfesores(Request $request) {
		if ($request->has('profesor_id')) {
			$profesor = Profesor::find($request->profesor_id);
			$profesor->delete();

			$retorno['error']     = false;
        	$retorno['respuesta'] = "Registro eliminado satisfactoriamente";
		} else {
			$retorno['error']     = false;
        	$retorno['respuesta'] = "Requiere id";
		}
		return Response::json($retorno);
	}
//////////////////////////////////////////////////////////////////////
}
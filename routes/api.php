<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

 //->name('datos.jug');

///////////// rutas crud alumnos /////////////////////////////////////
Route::post('alumnos/crear', 'EducacionController@CreateAlumnos');
Route::post('alumnos/obtener', 'EducacionController@ReadAlumnos');
Route::post('alumnos/actualizar', 'EducacionController@UpdateAlumnos');
Route::post('alumnos/eliminar', 'EducacionController@DeleteAlumnos');

//////////// rutas crud profesores ///////////////////////////////////
Route::post('profesores/crear', 'EducacionController@CreateProfesores');
Route::post('profesores/obtener', 'EducacionController@ReadProfesores');
Route::post('profesores/actualizar', 'EducacionController@UpdateProfesores');
Route::post('profesores/eliminar', 'EducacionController@DeleteProfesores');

//////////// rutas crud cursos ///////////////////////////////////
Route::post('cursos/crear', 'EducacionController@CreateCurso');
Route::post('cursos/obtener', 'EducacionController@ReadCursos');
Route::post('cursos/actualizar', 'EducacionController@UpdateAlumnos');
Route::post('cursos/eliminar', 'EducacionController@DeleteAlumnos');
//////////////////////////////////////////////////////////////////
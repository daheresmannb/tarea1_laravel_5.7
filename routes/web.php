<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/alumnos', function () {
    return view('alumnos');
});

Route::get('/botones-alumnos', function () {
    return view('botones_alumnos');
});

Route::get('/profesores', function () {
    return view('profesores');
});

Route::get('/botones-profesores', function () {
    return view('botones_profesor');
});

Route::get('/cursos', function () {
    return view('cursos');
});

Route::get('/botones-cursos', function () {
    return view('botones_cursos');
});

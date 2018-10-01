<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CursosTable extends Migration {
    public function up() {
        if (!Schema::hasTable('cursos')) {
            Schema::create(
                'cursos', 
                function (Blueprint $table) {
                    $table->increments('id');
                    $table->string('nombre');
                    $table->timestamps();
                }
            );
        }
    }

    public function down() {
        if (Schema::hasTable('alumnos')) {
            Schema::drop('alumnos');
        }
        if (Schema::hasTable('profesores')) {
            Schema::drop('profesores');
        }
        if (Schema::hasTable('alumnos')) {
            Schema::drop('alumnos');
        }
        if (Schema::hasTable('cursos')) {
            Schema::drop('cursos');
        }
    }
}
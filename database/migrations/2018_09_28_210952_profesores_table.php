<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProfesoresTable extends Migration {

    public function up() {
        if (!Schema::hasTable('profesores')) {
            Schema::create(
                'profesores', 
                function (Blueprint $table) {
                    $table->increments('id');
                    $table->string('nombres');
                    $table->string('apellidos');
                    $table->string('materia');
                    $table->smallInteger('edad');
                    $table->string('correo');
                    $table->integer('curso_id');
                    $table->timestamps();
                }
            );
        }
    }

    public function down() {
        //
    }
}
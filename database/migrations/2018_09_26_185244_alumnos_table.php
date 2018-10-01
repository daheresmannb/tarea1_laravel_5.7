<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlumnosTable extends Migration {
    public function up() {
        if (!Schema::hasTable('alumnos')) {
            Schema::create(
                'alumnos', 
                function (Blueprint $table) {
                    $table->increments('id');
                    $table->string('nombres');
                    $table->string('apellidos');
                    $table->string('correo');
                    $table->smallInteger('edad');
                    $table->date('fecha_nac')->nullable();
                    $table->timestamps();
                }
            );
        }
    }

    public function down() {
    }
}
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCursosIdToAlumnosTable extends Migration {

    public function up() {
        if (Schema::hasTable('alumnos')) {
            if (!Schema::hasColumn('alumnos', 'cursos_id')) {
                Schema::table(
                    'alumnos', 
                    function (Blueprint $table) {
                        $table->integer('cursos_id');
                    }
                );
            }
        }
    }

    public function down() {
    }
}
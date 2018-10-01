<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateForeignKeyProfesoresTable extends Migration {
    public function up() {



        if (Schema::hasTable('profesores')) {
            Schema::table(
                'profesores', 
                function (Blueprint $table) {
                    $table->integer('curso_id')
                        ->unsigned()
                    ->change();
                    $table->foreign('curso_id')
                        ->references('id')
                        ->on('cursos')
                    ->onDelete('cascade');
                }
            );
        }
    }

    public function down() {}
}
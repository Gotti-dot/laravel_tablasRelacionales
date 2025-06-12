<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('inscripciones', function (Blueprint $table) {
        $table->id('id_inscripcion');
        $table->unsignedBigInteger('id_estudiante');
        $table->unsignedBigInteger('id_curso');
        $table->date('fecha_inscripcion');
        $table->string('periodo_academico', 20);
        $table->enum('estado', ['Activa', 'Cancelada'])->default('Activa');
        $table->timestamps();

        $table->foreign('id_estudiante')->references('id_estudiante')->on('estudiantes');
        $table->foreign('id_curso')->references('id_curso')->on('cursos');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscripcions');
    }
};

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
    Schema::create('matriculas', function (Blueprint $table) {
        $table->id('id_matricula');
        $table->unsignedBigInteger('id_estudiante');
        $table->unsignedBigInteger('id_materia');
        $table->date('fecha_matricula');
        $table->string('periodo_academico', 20);
        $table->enum('estado', ['Activa', 'Cancelada', 'Finalizada'])->default('Activa');
        $table->timestamps();

        $table->foreign('id_estudiante')->references('id_estudiante')->on('estudiantes');
        $table->foreign('id_materia')->references('id_materia')->on('materias');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matriculas');
    }
};

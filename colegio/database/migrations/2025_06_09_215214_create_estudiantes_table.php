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
    Schema::create('estudiantes', function (Blueprint $table) {
        $table->id('id_estudiante');
        $table->string('nombre', 100);
        $table->string('apellido', 100);
        $table->date('fecha_nacimiento');
        $table->text('direccion')->nullable();
        $table->string('telefono', 15)->nullable();
        $table->timestamp('fecha_registro');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiantes');
    }
};

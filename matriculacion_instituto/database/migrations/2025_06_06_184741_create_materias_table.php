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
    Schema::create('materias', function (Blueprint $table) {
        $table->id('id_materia');
        $table->string('codigo', 20)->unique();
        $table->string('nombre', 100);
        $table->text('descripcion')->nullable();
        $table->integer('horas');
        $table->string('profesor', 100);
        $table->timestamps();
    });
}



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materias');
    }
};

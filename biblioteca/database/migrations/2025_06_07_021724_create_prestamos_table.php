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
    Schema::create('prestamos', function (Blueprint $table) {
        $table->id('id_prestamo');
        $table->unsignedBigInteger('id_libro');
        $table->unsignedBigInteger('id_socio');
        $table->date('fecha_prestamo');
        $table->date('fecha_devolucion');
        $table->enum('estado', ['activo', 'devuelto', 'atrasado']);
        $table->timestamps();
        $table->foreign('id_libro')->references('id_libro')->on('libros');
        $table->foreign('id_socio')->references('id_socio')->on('socios');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestamos');
    }
};

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
    Schema::create('libros', function (Blueprint $table) {
        $table->id('id_libro');
        $table->string('titulo', 200);
        $table->string('autor', 100);
        $table->string('isbn', 20);
        $table->string('editorial', 100);
        $table->integer('anio_publicacion');
        $table->enum('estado', ['disponible', 'prestado', 'reparacion']);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};

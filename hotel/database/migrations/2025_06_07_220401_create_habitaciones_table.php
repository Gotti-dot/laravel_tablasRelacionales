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
    Schema::create('habitaciones', function (Blueprint $table) {
        $table->id('id_habitacion');
        $table->string('numero', 10);
        $table->enum('tipo', ['individual', 'doble', 'suite']);
        $table->decimal('precio_noche', 10, 2);
        $table->text('descripcion');
        $table->enum('estado', ['disponible', 'ocupada', 'mantenimiento']);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('habitacions');
    }
};

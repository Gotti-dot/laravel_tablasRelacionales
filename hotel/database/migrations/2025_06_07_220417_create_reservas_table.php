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
    Schema::create('reservas', function (Blueprint $table) {
        $table->id('id_reserva');
        $table->unsignedBigInteger('id_huesped');
        $table->unsignedBigInteger('id_habitacion');
        $table->date('fecha_entrada');
        $table->date('fecha_salida');
        $table->enum('estado', ['confirmada', 'cancelada', 'finalizada']);
        $table->decimal('total', 10, 2);
        $table->timestamps();
        $table->foreign('id_huesped')->references('id_huesped')->on('huespedes');
        $table->foreign('id_habitacion')->references('id_habitacion')->on('habitaciones');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};

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
    Schema::create('ventas', function (Blueprint $table) {
        $table->id('id_venta');
        $table->unsignedBigInteger('id_cliente');
        $table->unsignedBigInteger('id_producto');
        $table->dateTime('fecha_venta');
        $table->integer('cantidad');
        $table->decimal('precio_unitario', 10, 2);
        $table->decimal('total', 10, 2);
        $table->timestamps();

        $table->foreign('id_cliente')->references('id_cliente')->on('clientes');
        $table->foreign('id_producto')->references('id_producto')->on('productos');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};

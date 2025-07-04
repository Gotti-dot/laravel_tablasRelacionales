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
    Schema::create('socios', function (Blueprint $table) {
        $table->id('id_socio');
        $table->string('nombre', 100);
        $table->string('apellido', 100);
        $table->string('dni', 15);
        $table->string('telefono', 15);
        $table->date('fecha_alta');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('socios');
    }
};

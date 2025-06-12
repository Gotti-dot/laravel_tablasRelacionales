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
    Schema::create('huespedes', function (Blueprint $table) {
        $table->id('id_huesped');
        $table->string('nombre', 100);
        $table->string('apellido', 100);
        $table->string('documento', 20);
        $table->string('nacionalidad', 50);
        $table->string('telefono', 15);
        $table->string('email', 100);
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('huespeds');
    }
};

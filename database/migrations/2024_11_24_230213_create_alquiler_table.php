<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('alquiler', function (Blueprint $table) {
            $table->bigIncrements('alq_id');
            $table->date('alq_fecha_desde');
            $table->date('alq_fecha_hasta');
            $table->decimal('alq_valor', 10, 2);
            $table->date('alq_fecha_entrega');
            $table->unsignedBigInteger('soc_id');
            $table->unsignedBigInteger('pel_id');
            $table->timestamps();

            $table->foreign('soc_id')->references('soc_id')->on('socio');
            $table->foreign('pel_id')->references('pel_id')->on('pelicula');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alquiler');
    }
};

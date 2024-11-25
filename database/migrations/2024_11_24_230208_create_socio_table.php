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
        Schema::create('socio', function (Blueprint $table) {
            $table->bigIncrements('soc_id');
            $table->string('soc_cedula', 10);
            $table->string('soc_nombre', 60);
            $table->string('soc_direccion', 60);
            $table->string('soc_telefono', 10);
            $table->string('soc_correo', 60);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('socio');
    }
};

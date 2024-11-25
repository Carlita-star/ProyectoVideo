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
        Schema::create('pelicula', function (Blueprint $table) {
            $table->bigIncrements('pel_id');
            $table->string('pel_nombre', 60);
            $table->decimal('pel_costo', 10, 2);
            $table->date('pel_fecha_estreno');
            $table->unsignedBigInteger('gen_id');
            $table->unsignedBigInteger('dir_id');
            $table->unsignedBigInteger('for_id');
            $table->timestamps();

            $table->foreign('gen_id')->references('gen_id')->on('genero');
            $table->foreign('dir_id')->references('dir_id')->on('director');
            $table->foreign('for_id')->references('for_id')->on('formato');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelicula');
    }
};

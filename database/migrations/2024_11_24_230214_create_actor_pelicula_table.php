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
        Schema::create('actor_pelicula', function (Blueprint $table) {
            $table->bigIncrements('apl_id');
            $table->string('apl_papel', 60);
            $table->unsignedBigInteger('pel_id');
            $table->unsignedBigInteger('act_id');
            $table->timestamps();

            $table->foreign('pel_id')->references('pel_id')->on('pelicula');
            $table->foreign('act_id')->references('act_id')->on('actor');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actor_pelicula');
    }
};

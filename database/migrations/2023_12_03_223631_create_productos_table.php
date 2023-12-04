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
        Schema::create('productos', function (Blueprint $table) {
            $table->id()->autoIncrement();

            $table->string('tipoderopa')->nullable(false);
            $table->string('color')->nullable(false);
            $table->integer('talla1')->default(0);
            $table->integer('talla2')->default(0);
            $table->integer('talla3')->default(0);
            $table->integer('talla4')->default(0);
            $table->integer('talla5')->default(0);
            $table->integer('talla7')->default(0);
            $table->integer('talla8')->default(0);
            $table->integer('talla9')->default(0);
            $table->integer('talla10')->default(0);
            $table->integer('talla11')->default(0);
            $table->integer('talla12')->default(0);
            $table->integer('talla13')->default(0);
            $table->integer('talla14')->default(0);
            $table->integer('talla15')->default(0);
            $table->integer('talla16')->default(0);
            $table->integer('talla17')->default(0);
            $table->integer('talla18')->default(0);
            $table->integer('talla19')->default(0);
            $table->integer('talla20')->default(0);
            $table->integer('talla21')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};

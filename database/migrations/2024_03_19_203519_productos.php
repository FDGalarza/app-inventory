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
            $table->id();
            $table->text('codigo');
            $table->text('CodBarras');
            $table->text('name');
            $table->text('descripcion');
            $table->text('unid_medida');
            $table->integer('cantidad');
            $table->float('valor');
            $table->float('ivaPorcentaje');
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

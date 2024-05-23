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
            $table->unsignedBigInteger('Unid_med_id');
            $table->integer('cantidad');
            $table->float('valor');
            $table->unsignedBigInteger('iva_id');
            $table->timestamps();

            $table->foreign('Unid_med_id')->references('id')->on('unidad_medidas');
            $table->foreign('iva_id')->references('id')->on('ivas');
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

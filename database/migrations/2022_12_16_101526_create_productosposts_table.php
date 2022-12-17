<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductospostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productosposts', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->date('fecha_viaje');
            $table->string('hora_viaje');
            $table->string('inicio_ruta');
            $table->string('destino_ruta');
            $table->integer('plazas_disponibles');
            $table->string('precio_persona');
            $table->boolean('status_active')->default(true);
            $table->boolean('allow_desvios')->default(true);
            $table->string('estimacion_hora_llegada');
            $table->string('distancia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productosposts');
    }
}

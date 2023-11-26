<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oferta_laborals', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_empresa');
            $table->string('titulo');
            $table->string('descripcion');
            $table->string('requisitos');
            $table->string('salario');
            $table->string('modalidad');
            $table->string('ubicacion');
            $table->email('correo_contacto');
            $table->string('ciudad');
            $table->string('tiempo_contrato');
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
        Schema::dropIfExists('oferta_laborals');
    }
};

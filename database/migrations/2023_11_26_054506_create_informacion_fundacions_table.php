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
        Schema::create('informacion_fundacions', function (Blueprint $table) {
            $table->id();
            $table->string('mision');
            $table->string('vision');
            $table->string('proyectos');
            $table->string('contacto');
            $table->string('correo');
            $table->string('red social');
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
        Schema::dropIfExists('informacion_fundacions');
    }
};

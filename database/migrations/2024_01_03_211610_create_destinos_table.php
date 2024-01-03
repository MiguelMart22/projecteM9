<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinosTable extends Migration
{
    public function up()
    {
        Schema::create('destinos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
            $table->decimal('precio', 10, 2);
            $table->string('imagen')->nullable(); // Nueva columna para la ruta de la imagen
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('destinos');
    }
}


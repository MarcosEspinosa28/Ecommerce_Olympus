<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_producto');
            $table->string('imagen')->nullable();
            $table->string('color');
            $table->string('valor');
            $table->string('cantidad');
            // Como se llama la llave foranea
            $table->bigInteger('categoria_id')->unsigned();
            $table->bigInteger('clasificacion_id')->unsigned();
            // la relacion con la llave foranea
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->foreign('clasificacion_id')->references('id')->on('clasificaciones');
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
        Schema::dropIfExists('productos');
    }
}

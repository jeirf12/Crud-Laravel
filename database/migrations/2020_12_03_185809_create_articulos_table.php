<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->increments('id_articulo');
	    	$table->string('codigo');
            $table->string('codigo_barras');
            $table->string('descripcion');
            $table->string('comentario');
            $table->string('imagen');
            $table->integer('id_tipoarticulo');
            $table->integer('stock_minimo');
            $table->integer('stock_maximo');
            $table->integer('id_ubicacion');
            $table->integer('existencia');
            $table->integer('porcentaje_iva');
            $table->integer('valor_inicial');
            $table->integer('tar_1');
	    	$table->integer('peso');
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
        Schema::dropIfExists('articulos');
    }
}

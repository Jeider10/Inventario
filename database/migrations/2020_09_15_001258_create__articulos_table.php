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
        Schema::create('Articulos', function (Blueprint $table) {
            $table->id();
            $table->string('Descripcion');
            $table->bigInteger('Precio_Venta');
            $table->bigInteger('Precio_Costo');
            $table->string('Tipo_Articulo');
            $table->string('Proveedor');
            $table->date('Fecha_Ingreso');
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
        Schema::dropIfExists('Articulos');
    }
}

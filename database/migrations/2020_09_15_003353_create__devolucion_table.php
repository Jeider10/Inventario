<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevolucionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Devolucion', function (Blueprint $table) {
            $table->id();
            $table->string('Id_Detalles_Del_Articulo');
            $table->string('Motivo');
            $table->date('Fecha_Devolucion');
            $table->bigInteger('Cantidad');
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
        Schema::dropIfExists('Devolucion');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Cliente', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('tipo_documento');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('direccion');
            $table->string('ciudad');
            $table->string('telefono');
            //$table->bigInteger('Id_Documento')->unsigned(); 
           // $table->bigInteger('user_id')->unsigned(); 
            $table->timestamps();
            //$table->foreign('Id_Documento')->references('id')->on('users');
           // $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Cliente');
    }
}

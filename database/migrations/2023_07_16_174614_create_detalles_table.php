<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_publicidad', function (Blueprint $table) {
            $table->id();
            $table->string('imagen');
            $table->text('marca');
            $table->text('placa');
            $table->text('fabricacion');
            $table->text('tipo'); 
            $table->text('color');
            $table->integer('precio');
            $table->text('combustible');
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
        Schema::dropIfExists('detalle_publicidad');
    }
}

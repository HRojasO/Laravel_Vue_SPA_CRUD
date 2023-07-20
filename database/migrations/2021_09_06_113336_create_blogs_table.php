<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('imagen')->nullable();
            $table->text('marca')->nullable();
            $table->text('placa')->nullable();
            $table->integer('fabricacion')->nullable();
            $table->text('tipo')->nullable(); 
            $table->text('color')->nullable();
            $table->integer('precio')->nullable();
            $table->text('combustible')->nullable();
            $table->text('nombres')->nullable();       
            $table->text('apellidos')->nullable();
            $table->integer('cell')->nullable();    
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
        Schema::dropIfExists('blogs');
    }
}

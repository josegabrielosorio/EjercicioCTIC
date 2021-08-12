<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      

        Schema::create('salons', function (Blueprint $table) {
            $table->id();
            $table->String('Area');
            $table->integer('Capacidad');
            $table->timestamps();
        });


        Schema::create('profesors', function (Blueprint $table) {
            $table->id();
            $table->String('Nombre');
            $table->String('Apellido');
            $table->timestamps();
        });

        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->String('Nombre');
            $table->date('fecha');
            $table->time('hora');
            $table->time('Actu');
            $table->unsignedBigInteger('salon_id')->nullable();
            $table->foreign('salon_id')->references('id')->on('salons')->nullOnDelete();
            $table->unsignedBigInteger('profesor_id')->nullable();
            $table->foreign('profesor_id')->references('id')->on('profesors')->nullOnDelete();
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
        Schema::dropIfExists('cursos');
        Schema::dropIfExists('salons');
        Schema::dropIfExists('profesors');
    }
}

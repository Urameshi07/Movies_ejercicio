<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeliculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peliculas2', function (Blueprint $table) {
            $table->id();
            $table->string ('titulo_p','155');
            $table-> text('director_p');
            $table->string ('duracion_p','100');
            $table->text ('imagen_p','100');
            $table->string ('clasificacion','100');
            $table->dateTime('fecha_est_p');
            $table->dateTime('fecha_fin_p');
            $table->text ('status_p','255');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peliculas');
    }
}

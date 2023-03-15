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
            $table-> text('descripcion_p');
            $table-> text('director_p');
            $table->string ('duracion_p','100');
            $table->text ('imagen_p','100');
            $table->string ('categoria_p','100');
            $table->string ('trailer_p','100');
            $table->timestamps('fecha_est_p');
            $table->timestamps('fecha_fin_p');
            $table->text ('status_p','255');
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
        Schema::dropIfExists('peliculas');
    }
}

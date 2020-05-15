<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id(); // id del post
            $table->bigInteger('user_id')->unsigned(); // id del usuario que creo el post - traido de la tabla users
            $table->string('title'); // titulo del post
            $table->string('slug')->unique(); // campo del slg 
            $table->string('image')->nullable(); // campo de imagen, que no es obligatorio
            $table->text('body'); // el cuerpo del post
            $table->text('iframe')->nullable(); // pudiendo agregar como ejemplo videos de youtube
            $table->timestamps(); // fechas de creacion y actualizacion que crea laravel por defecto
            $table->foreign('user_id')->references('id')->on('users'); // relacion de la tabla post con la tabla users
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}

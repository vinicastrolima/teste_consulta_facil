<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCidadesTable extends Migration
{
    public function up()
    {
        Schema::create('cidades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 100);
            $table->string('estado', 100);
            $table->timestamps(); // Isso cria os campos created_at e updated_at
            $table->softDeletes(); // Isso cria o campo deleted_at para soft deletes
        });
    }

    public function down()
    {
        Schema::dropIfExists('cidades');
    }
}

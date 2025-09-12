<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteContatosTable extends Migration
{
    /**
     * Cria a tabela com o metodo up
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_contatos', function (Blueprint $table) {
            $table->id(); // cria a tabela de id
            $table->timestamps(); // cria duas tabelas, tipo: data_criaca e data_alteracao
            $table->string('nome', 50);
            $table->string('telefone', 20);
            $table->string('email', 80);
            $table->integer('motivo_contato');
            $table->string('text');
        });
    }

    /**
     * Remove a tabela com o metodo down
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_contatos');
    }
}

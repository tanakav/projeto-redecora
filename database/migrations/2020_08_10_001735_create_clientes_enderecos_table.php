<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes_enderecos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('clientes_id')->constrained();
            $table->foreignId('enderecos_id')->constrained();
            $table->enum('tipo_endereco', ['residencial','comercial','cobranca']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes_enderecos');
    }
}

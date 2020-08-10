<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFornecedoresEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedores_enderecos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fornecedores_id')->constrained();
            $table->foreignId('enderecos_id')->constrained();
            $table->enum('tipo_endereco', ['comercial','faturamento','entrega']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fornecedores_enderecos');
    }
}

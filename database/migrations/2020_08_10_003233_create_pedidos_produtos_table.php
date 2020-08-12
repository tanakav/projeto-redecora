<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos_produtos', function (Blueprint $table) {
            $table->foreignId('pedidos_id')->constrained();
            $table->foreignId('produtos_id')->constrained();
            $table->integer('qtde');
            $table->decimal('valor_bruto')->nullable();
            $table->decimal('valor_desconto')->nullable();
            $table->decimal('valor_liquido')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos_produtos');
    }
}

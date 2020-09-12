<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->enum('forma_pagamento',["boleto","debito","credito"]);
            $table->enum('situacao',['andamento','em_aprovacao','transporte','entregue']);
            $table->decimal('valor_bruto');
            $table->decimal('valor_desconto')->nullable();
            $table->decimal('valor_liquido');
            $table->decimal('valor_frete');
            $table->string('codigo_rastreio',50);
            $table->foreignId('clientes_id')->constrained();
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
        Schema::dropIfExists('pedidos');
    }
}

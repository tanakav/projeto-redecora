<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('descricao',100);
            $table->string('descricao_completa',300)->nullable();
            $table->decimal('preco');
            $table->decimal('valor_desconto')->nullable();
            $table->foreignId('fornecedores_id')->constrained();
            $table->foreignId('cores_id')->constrained();
            $table->foreignId('materials_id')->constrained();
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
        Schema::dropIfExists('produtos');
    }
}

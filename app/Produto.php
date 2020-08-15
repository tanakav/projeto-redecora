<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //
    public function pedidos()
    {
        return $this->belongsToMany(Pedido::class,'pedidos_produtos');
    }

    public function categorias()
    {
        return $this->belongsToMany(Categoria::class,'produtos_categorias');
    }    

    public function cor()
    {
        return $this->belongsTo(Cor::class,'cores_id','id'); //duvida
    }

    public function material()
    {
        return $this->belongsTo(Material::class,'materials_id');
    }

    public function fornecedor()
    {
        return $this->belongsTo(Fornecedor::class,'fornecedores_id'); //duvida
    }

    public function imagem()
    {
        return $this->hasMany(Produtos_Imagens::class);
    }
}

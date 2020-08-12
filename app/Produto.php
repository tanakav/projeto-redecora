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
        return $this->hasMany(Categoria::class,'produtos_categorias');
    }    

    public function cor()
    {
        return $this->hasOne(Cor::class,'cores_id','id'); //duvida
    }

    public function material()
    {
        return $this->hasOne(Material::class);
    }

    public function fornecedor()
    {
        return $this->belongsTo(Fornecedor::class,'fornecedores_id','id'); //duvida
    }

    public function imagem()
    {
        return $this->hasMany(Produtos_Imagens::class);
    }
}

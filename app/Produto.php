<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $guarded = [];

    public function scopeFiltro($query){

        if(request('categorias')){
            $query->whereHas('categorias', function ($query){
                $query->whereIn('id',request('categorias'));
            });
        }

        if(request('material')){
            $query->whereHas('material', function ($query){
                $query->whereIn('id',request('material'));
            });
        }

        if(request('cor')){
            $query->whereHas('cor', function ($query){
                $query->whereIn('id',request('cor'));
            });
        }

        if(request('filtroValor')){
            if(in_array('lowestprice',request()->filtroValor)){
                $query->where('preco','<=',200);
            }

            if(in_array('lowprice',request()->filtroValor)){
                $query->where('preco','>',200)
                    ->where('preco','<=',400);
            }

            if(in_array('midprice',request()->filtroValor)){
                $query->where('preco','>',400)
                    ->where('preco','<=',600);
            }

            if(in_array('highprice',request()->filtroValor)){
                $query->where('preco','>',600);
            }

        }

        return $query;
    }

    public function pedidos()
    {
        return $this->belongsToMany(Pedido::class,'pedidos_produtos','produtos_id','pedidos_id');
    }

    public function categorias()
    {
        return $this->belongsToMany(Categoria::class,'produtos_categorias','produtos_id','categorias_id');
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

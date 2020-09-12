<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $table = "fornecedores";

    public function enderecos()
    {
        return $this->belongsToMany(Enderecos::class,'fornecedores_enderecos','fornecedores_id'); //duvida
    }

    public function produtos()
    {
        return $this->hasMany(Produto::class,'fornecedores_id');
    }
}

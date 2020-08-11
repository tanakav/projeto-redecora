<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $table = "fornecedores";

    public function enderecos()
    {
        return $this->hasMany(Enderecos::class,'fornecedores_enderecos','fornecedores_id','enderecos_id'); //duvida
    }

    public function produtos()
    {
        return $this->hasMany(Produto::class);
    }
}

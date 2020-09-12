<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    //

    public function clientes()
    {
        return $this->belongsToMany(Cliente::class,'clientes_enderecos');
    }

    public function fornecedores()
    {
        return $this->belongsToMany(Fornecedor::class,'fornecedores_enderecos','enderecos_id','fornecedores_id'); //duvida
    }
}

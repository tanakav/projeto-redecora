<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //

    public function enderecos()
    {
        return $this->hasMany(Endereco::class,'clientes_enderecos');
    }

    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }
}

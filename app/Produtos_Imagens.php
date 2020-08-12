<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos_Imagens extends Model
{
    //
    protected $table="produtos_imagens";

    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }
}

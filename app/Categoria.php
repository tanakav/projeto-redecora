<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //

    public function produtos()
    {
        return $this->belongsToMany(Produto::class,'produtos_categorias');
    }
}
